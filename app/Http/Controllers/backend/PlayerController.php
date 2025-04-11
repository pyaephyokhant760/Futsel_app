<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $player = Player::query()->orderBy('created_at', 'desc');
            // logger($player);
            return DataTables::of($player)
                ->addIndexColumn()
                ->addColumn('name', function ($player) {
                    return $player->name;
                })
                ->addColumn('birth', function ($player) {
                    return Carbon::parse($player->birth)->age . ' Years';
                })
                ->addColumn('position', function ($player) {
                    return $player->position;
                })
                ->filterColumn('name', function ($query, $keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                })
                ->addColumn('action', 'admin.player.action')
                ->rawColumns(['name', 'action' , 'birth', 'position'])
                ->make(true);
        }
        return view('admin.player.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'birth' => 'required|date',
            'position' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validate();
        try {
            Player::query()->create($data);
            return redirect()->route('players.index')->with('success', 'Successfully created!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'There was an issue saving the Hanset. Please check your data.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $player = Player::query()->findOrFail($id);

        // Calculate age
        return view('admin.player.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coach = Player::query()->findOrFail($id);
        // check validator
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'birth' => 'required|date',
            'position' => 'required',
        ]);
        // check validator fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $validator->validate();
        // update data
        try {
            $coach->update($data);
            return redirect()->route('players.index')->with('success', 'Successfully updated!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'There was an issue saving the Hanset. Please check your data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $player = Player::query()->findOrFail($request->id);

        $player->delete();
        return response()->json(['message' => 'league deleted successfully']);
    }
}
