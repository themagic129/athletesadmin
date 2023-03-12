<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workouts = Workout::all();
        $programs = Program::all();
        $q = $request->input('q');
        $workouts = Workout::where('name', 'like', "%$q%")->paginate(7);
        return view('workouts.index', compact('workouts', 'programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $programs = Program::all();
        $q = $request->input('q');
        $workouts = Workout::where('name', 'like', "%$q%");
        return view('workout.create', compact('workouts', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workouts = new Workout();

        $workouts->program_id = $request->input('program_id');
        $workouts->name = $request->input('name');
        $workouts->description = $request->input('description');
        $workouts->save();
        session()->flash('message', 'Workout added successfully!');
        return redirect('workouts');
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
        $programs = Program::all();
        $workouts = Workout::all();

        return view('workouts.edit', compact('programs', 'workouts'));
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
