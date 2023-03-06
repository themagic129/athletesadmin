<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Athletes;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class AthletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $athletes = Athlete::all();

        return view('athletes.index', compact('athletes'));


     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('athletes.create');
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
        $athlete->organization= $request->input('organization');
        $athlete->first_name = $request->input('first_name');
        $athlete->last_name = $request->input('last_name');
        $athlete->coach_trainer_id = $request->input('coach_trainer_id');
        $athlete->program = $request->input('program');
        $athlete->team= $request->input('team');
      
        $athlete->height= $request->input('height');
        $athlete->weight = $request->input('weight');
        $athlete->bats = $request->input('bats');
        $athlete->throws = $request->input('throws');
        $athlete->phone = $request->input('phone');        
        $athlete->email = $request->input('email');
        $athlete->profile_photo = $request->input('profile_photo');

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
