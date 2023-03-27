<?php

namespace App\Http\Controllers;

use App\Models\coaches_trainers;
use App\Models\Exercise;
use App\Models\ExerciseStats;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        $exercisestat = ExerciseStats::all();
        $exercises = Exercise::where('name', 'like', "%$q%")->paginate(7);
        return view('exercises.index', compact('exercises', 'exercisestat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $exercises = Exercise::all();
        $q = $request->input('q');
        $exercises = Exercise::all();

        return view('exercises.create', compact('exercises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercises = new Exercise();
        $exercises->name = $request->input('name');
        $exercises->description = $request->input('description');
        $exercises->save();

        session()->flash('message', 'Exercise added successfully!');

        return redirect('exercises');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercises = Exercise::all();

        return view('exercises.show', compact('exercises'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercises = Exercise::all();


        return view('exercises.edit', compact('exercises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $exercises = Exercise::findOrFail($id);
        $exercises->name = $request->input('name');
        $exercises->description = $request->input('description');
        $exercises->save();
        session()->flash('message', 'Exercise updated successfully!');
        return redirect('exercises');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercises = Exercise::where('id', $id);
        if ($exercises) {
            $exercises->delete();
        }

        return redirect('exercises');
    }
}
