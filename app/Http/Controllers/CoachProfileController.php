<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\coaches_trainers;
use Illuminate\Http\Request;

class CoachProfileController extends Controller
{
    public function show()
    {
        try {

            $user = auth()->user();

            $userid = auth()->id();


            $coaches = DB::table('coaches_trainers')->select('user_id', 'first_name', 'last_name', 'phone', 'email', 'certifications', 'organization', 'specialty')->where('user_id', '=', $userid)->get();

            return view('myprofilecoach.index', compact('user', 'coaches'));
        } catch (\Exception $e) {

            return view('myprofilecoach.noprofile');
        }
    }

    public function update(Request $request, $id)
    {
        $coaches = coaches_trainers::findOrFail($id);

        $coaches->user_id = $request->input('user_id');
        $coaches->certifications = $request->input('certifications');
        $coaches->organization = $request->input('organization');
        $coaches->first_name = $request->input('first_name');
        $coaches->last_name = $request->input('last_name');
        $coaches->phone = $request->input('phone');
        $coaches->email = $request->input('email');
        $coaches->specialty = $request->input('specialty');
        $coaches->save();
        session()->flash('message', 'Profile updated successfully!');
        return redirect('my-profilecoach');
    }
}
