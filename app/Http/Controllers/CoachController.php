<?php

namespace App\Http\Controllers;

use App\Models\coaches_trainers;
use App\Models\User;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        $coaches = coaches_trainers::where('first_name','like', "%$q%")->paginate(7);      
        $users = User::where('email','like', "%$q%")->paginate(1);        
        return view('coaches.index', compact('coaches','users'));
    }

    public function searchUser(Request $request){

        $coaches = coaches_trainers::all();
        $q = $request->input('q');
        $users = User::where('email','like', "%$q%")->paginate(1);        
        return view('coaches.create', compact('coaches','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $q = $request->input('q');
        $users = User::where('email','like', "%$q%")->paginate(1);
        return view ('coaches.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
