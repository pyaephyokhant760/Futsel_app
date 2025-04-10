<?php

namespace App\Http\Controllers\backend;

use App\Models\League;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class LeagueController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('permission:league-list', ['only' => ['index']]);
        // $this->middleware('permission:league-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:league-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:league-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
            $league = League::query()->orderBy('created_at', 'desc');
            // logger($league);
            return DataTables::of($league)
                ->addIndexColumn()
                ->addColumn('name', function ($league) {
                    return $league->name;
                })
                ->filterColumn('name', function ($query, $keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                })
                ->addColumn('action', 'admin.league.action')
                ->rawColumns(['name', 'action'])
                ->make(true);
        }
        return view('admin.league.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.league.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // check validator
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);

        // check validator fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validate();

        // create data
        try {
            League::query()->create($data);
            return redirect()->route('leagues.index')->with('success', 'Successfully created!');
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
        $league = League::query()->findOrFail($id);
        return view('admin.league.edit', compact('league'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $league = League::query()->findOrFail($id);
        // check validator
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);
        // check validator fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $validator->validate();
        // update data
        try {
            $league->update($data);
            return redirect()->route('leagues.index')->with('success', 'Successfully updated!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'There was an issue saving the Hanset. Please check your data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $league = League::query()->findOrFail($request->id);
        // Delete pdf

        $league->delete();
        return response()->json(['message' => 'league deleted successfully']);
    }
}
