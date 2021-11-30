<?php

namespace App\Http\Controllers;
use App\Models\registration;
use Illuminate\Http\Request;
use DB;
class RegistrationController extends Controller
{
    public function reg(){
        $users = DB::select(DB::raw("
            SELECT *
            FROM registration"));
        return view('login',compact('users'));
    }
    public function register(Request $request){


        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'

        ]);
        DB::table('registration')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation')

        ]);
        return redirect('/studentInformation')->with('status', 'data inserted successfully');
    }

}
