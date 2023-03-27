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

        $user = auth()->user();

        $userid = auth()->id();

        $athlete = $user->athletes;

        $athletetest = DB::table('athletes')->select('athletes.*', 'athletes.first_name')->where('athletes.user_id', '=', $userid)->get();

        $coaches = coaches_trainers::all();
        $programs = Program::all();

        return view('myprofile.index', compact('user', 'athlete', 'coaches', 'programs', 'athlete', 'athletetest'));
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
