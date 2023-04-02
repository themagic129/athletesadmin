<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\coaches_trainers;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{


    public function show()
    {
        try {

            $user = auth()->user();

            $userid = auth()->id();

            $athlete = $user->athletes;


            $athletetest = DB::table('athletes')
                ->leftjoin('workout', 'athletes.workout_id', '=', 'workout.id')
                ->select('athletes.*', 'athletes.first_name', 'workout.name', 'workout.description', 'workout.id')
                ->where('athletes.user_id', '=', $userid)
                ->get();

            foreach ($athletetest as $athletete) {
                $workoutid = $athletete->id;
            }


            $program_workout = DB::table('workout')
                ->leftJoin('program', 'workout.program_id', '=', 'program.id')
                ->select('workout.*', 'program.name')
                ->where('workout.id', '=', $workoutid)->get();


            $exercise_workout = DB::table('exercise')
                ->leftJoin('workout', 'exercise.workout_id', '=', 'workout.id')
                ->select('exercise.name', 'exercise.description', 'exercise.num_reps', 'exercise.num_sets')
                ->where('exercise.workout_id', '=', $workoutid)->get();


            $coaches = coaches_trainers::all();
            $programs = Program::all();

            return view('myprofile.index', compact('user', 'athlete', 'coaches', 'programs', 'athlete', 'athletetest', 'program_workout', 'exercise_workout'));
        } catch (\Exception $e) {

            return view('myprofile.noprofile');
        }
    }


    public function edit()
    {

        $programs = Program::all();
        $coaches = coaches_trainers::all();
        $athlete = Athlete::all();
        return view('myprofile.edit', compact('coaches', 'programs', 'athlete'));
    }

    public function update(Request $request, $id)
    {
        $athlete = Athlete::findOrFail($id);

        $athlete->user_id = $request->input('user_id');
        $athlete->organization = $request->input('organization');
        $athlete->first_name = $request->input('first_name');
        $athlete->last_name = $request->input('last_name');
        $athlete->coach_trainer_id = $request->input('coach_trainer_id');
        $athlete->program = $request->input('program');
        $athlete->team = $request->input('team');
        $athlete->height = $request->input('height');
        $athlete->weight = $request->input('weight');
        $athlete->bats = $request->input('bats');
        $athlete->throws = $request->input('throws');
        $athlete->phone = $request->input('phone');
        $athlete->email = $request->input('email');
        //$athlete->profile_photo = $request->input('profile_photo');
        $athlete->save();
        session()->flash('message', 'Athlete updated successfully!');
        return redirect('my-profile');
    }
}
