<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use Illuminate\Http\Request;


class welcomeController extends Controller
{
    public function record()
    {
        $welcome = welcome:: orderBy('id', 'DESC')->get();
        return view('welcome', compact('welcome'));
    }

    public function addWelcome(Request $request)
    {
        $id = $request->id;
        if (isset($id) && !empty($id)) {
            $student = welcome::find($id);
        } else {
            $student = new welcome();
            $student->firstname = $request->firstname;
            $student->lastname = $request->lastname;
        }
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->Transitionamount = $request->Transitionamount;
        $student->save();


        return redirect(route('welcome'));
    }
}
