<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Athletes;
use App\Models\coaches_trainers;
use App\Models\Program;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AthletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $programs = Program::all();
        $q = $request->input('q');
        $athletes = Athlete::where('first_name', 'like', "%$q%")->paginate(7);
        $coaches = coaches_trainers::all();
        $users = User::where('email', 'like', "%$q%")->paginate(1);

        return view('athletes.index', compact('athletes', 'users', 'coaches', 'programs'));
    }

    public function searchUser(Request $request)
    {

        $athletes = Athlete::all();
        $programs = Program::all();
        $coaches = coaches_trainers::all();
        $q = $request->input('q');
        $users = User::where('email', 'like', "%$q%")->paginate(1);
        return view('athletes.create', compact('athletes', 'users', 'coaches', 'programs'));
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
        $coaches = coaches_trainers::all();
        $users = User::where('email', 'like', "%$q%")->paginate(1);
        return view('athletes.create', compact('users', 'coaches', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $athlete = new Athlete();

        $athlete->user_id = $request->input('user_id');
        $athlete->organization = $request->input('organization');
        $athlete->first_name = $request->input('first_name');
        $athlete->last_name = $request->input('last_name');
        $athlete->coach_trainer_id = $request->input('coach_trainer_id');
        $athlete->program = $request->input('program');
        $athlete->team = $request->input('team');
        $athlete->birthday = $request->input('birthday');
        $athlete->height = $request->input('height');
        $athlete->weight = $request->input('weight');
        $athlete->bats = $request->input('bats');
        $athlete->throws = $request->input('throws');
        $athlete->phone = $request->input('phone');
        $athlete->email = $request->input('email');

        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/images/', $name);

        $athlete->profile_photo = $name;
        //$photo = new ProfilePhoto();
        //$photo->name = $name;
        //$photo->size = $size;
        //$photo->save();


        $athlete->save();


        session()->flash('message', 'Athlete added successfully!');

        return redirect('athletes');
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
        $coaches = coaches_trainers::all();
        return view('athletes.edit', compact('coaches', 'programs'));
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
        $athlete->profile_photo = $request->input('profile_photo');
        $athlete->save();
        session()->flash('message', 'Athlete updated successfully!');
        return redirect('athletes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        try {
            // Buscar el atleta a eliminar
            $athlete = Athlete::where('user_id', $user_id);

            // Intentar eliminar el atleta
            $athlete->delete();

            return redirect()->route('athletes.index')
                ->with('success', 'El atleta se eliminó exitosamente');
        } catch (\Illuminate\Database\QueryException $e) {
            // Si hay un error de integridad referencial
            return redirect()->route('athletes.index')
                ->with('error', 'Unable to delete the selected athlete as there are an athlete metric assigned to him!');
        }
        return redirect('athletes');
    }
}
