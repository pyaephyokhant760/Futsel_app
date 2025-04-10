<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $league = Coach::query()->orderBy('created_at', 'desc');
            // logger($league);
            return DataTables::of($league)
                ->addIndexColumn()
                ->addColumn('name', function ($league) {
                    return $league->name;
                })
                ->addColumn('start_date', function ($league) {
                    return $league->start_date;
                })
                ->addColumn('country', function ($league) {
                    return $league->country;
                })
                ->filterColumn('name', function ($query, $keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                })
                ->filterColumn('country', function ($query, $keyword) {
                    $query->where('country', 'like', "%{$keyword}%");
                })
                ->addColumn('action', 'admin.coach.action')
                ->rawColumns(['name', 'action', 'start_date', 'country'])
                ->make(true);
        }
        return view('admin.coach.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coach.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // check validator
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'birth_date' => 'required',
            'country' => 'required',
            'history' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validate();
        $data['end_date'] = Carbon::now()->format('Y-m-d');
        // create data
        try {
            Coach::query()->create($data);
            return redirect()->route('coachs.index')->with('success', 'Successfully created!');
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
        $coach = Coach::query()->findOrFail($id);
        return view('admin.coach.edit', compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coach = Coach::query()->findOrFail($id);
        // check validator
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'birth_date' => 'required',
            'country' => 'required',
            'history' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
        ]);
        // check validator fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $validator->validate();
        // update data
        try {
            $coach->update($data);
            return redirect()->route('coachs.index')->with('success', 'Successfully updated!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'There was an issue saving the Hanset. Please check your data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $coach = Coach::query()->findOrFail($request->id);

        $coach->delete();
        return response()->json(['message' => 'league deleted successfully']);
    }
}
