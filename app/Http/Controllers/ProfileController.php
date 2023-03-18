<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        $athlete = $user->athletes;

        return view('myprofile.index', compact('user', 'athlete'));
    }
}
