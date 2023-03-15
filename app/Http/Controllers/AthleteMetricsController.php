<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\AthleteMetric;
use App\Models\coaches_trainers;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class AthleteMetricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $athletemetrics = AthleteMetric::all();
        $q = $request->input('q');
        $athletemetrics = AthleteMetric::where('athlete_id', 'like', "%$q%")->paginate(7);
        $athletes = Athlete::where('first_name', 'like', "%$q%")->paginate(1);
        $coaches = coaches_trainers::all();
        $programs = Program::all();
        return view('athletemetrics.index', compact('athletemetrics', 'athletes', 'coaches', 'programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchAthlete(Request $request)
    {

        $athletes = Athlete::all();
        $programs = Program::all();
        $coaches = coaches_trainers::all();
        $q = $request->input('q');
        $athletes = Athlete::where('first_name', 'like', "%$q%")->paginate(1);
        return view('athletemetrics.create', compact('athletes', 'athletes', 'coaches', 'programs'));
    }


    public function create()
    {
        $athletes = Athlete::all();
        return view('athletemetrics.create', compact('athletes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $athletemetrics = new AthleteMetric();

        $athletemetrics->athlete_id = $request->input('athlete_id');
        $athletemetrics->max_velocity = $request->input('max_velocity');
        $athletemetrics->max_throwing_velocity = $request->input('max_throwing_velocity');
        $athletemetrics->blast_plane_score = $request->input('blast_plane_score');
        $athletemetrics->blast_connection_score = $request->input('blast_connection_score');
        $athletemetrics->blast_rotation_score = $request->input('blast_rotation_score');
        $athletemetrics->max_fb_spin_rate = $request->input('max_fb_spin_rate');
        $athletemetrics->ave_fb_spin_rate = $request->input('ave_fb_spin_rate');

        $athletemetrics->save();

        session()->flash('message', 'Athlete Metric added successfully!');

        return redirect('athletemetrics');
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
        $athletemetrics = AthleteMetric::where('id', $id);
        if ($athletemetrics) {
            $athletemetrics->delete();
        }

        return redirect('athletemetrics');
    }
}
