<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseStats;
use App\Models\Workout;
use Illuminate\Http\Request;

class ExercisestatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        $workouts = Workout::all();
        $exercises = Exercise::all();
        $exercisesstats = ExerciseStats::where('id', 'like', "%$q%")->paginate(7);

        return view('exercisestats.index', compact('exercisesstats', 'workouts', 'exercises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exercisestats = new ExerciseStats();
        $workouts = Workout::all();

        $exercises = Exercise::all();

        return view('exercisestats.create', compact('workouts', 'exercises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercisesstats = new ExerciseStats();
        $exercisesstats->workout_id = $request->input('workout_id');
        $exercisesstats->exercise_id = $request->input('exercise_id');
        $exercisesstats->num_reps = $request->input('num_reps');
        $exercisesstats->num_sets = $request->input('num_sets');
        $exercisesstats->save();

        session()->flash('message', 'Stats added successfully!');

        return redirect('exercisestats');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}