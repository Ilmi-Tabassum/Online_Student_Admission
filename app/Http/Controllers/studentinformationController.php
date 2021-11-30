<?php

namespace App\Http\Controllers;
use App\Models\divission;
use App\Models\upazila;
use App\Models\thana;
use App\Models\name;
use App\Models\registration;
use Illuminate\Http\Request;
use App\Models\Studentinformation;
use DB;
class studentinformationController extends Controller
{

    public function indexes()
    {
        $test = DB::select(DB::raw("
            SELECT *
            FROM studentinformation"));
        $divission = \DB::table('divission')->get();
        $blood_groups = array('A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-', 'AB+' => 'AB+', 'AB-' => 'AB-');
        return view('studentInformation')->with(["studentinformation" => $test,"divission" => $divission, "blood_groups" => $blood_groups]);



    }

    public function store(Request $request)
    {

        $studentinfo = new Studentinformation;
        $studentinfo->name = $request['name'];
        $studentinfo->name = $request['name'];
        $studentinfo->email = $request['email'];
        $studentinfo->gender = $request['gender'];
        $studentinfo->division_id = $request['divission'];
           $studentinfo->thana_id = $request['thana'];
           $studentinfo->upazila_id = $request['upazila'];
        $studentinfo->address = $request['address'];
        $studentinfo->dateofbirth = $request['dateofbirth'];
        $studentinfo->blood_groups=$request['blood_groups'];

        $studentinfo->save();
    }

    public function indexing()
    {
        $divission = \DB::table('divission')->get();

        return view('studentInformation-index', compact('divission'));
//        return view('dashboard')->with(["divission" => $divission]);
    }

    public function get_thana($id)
    {

        $thana = \DB::table('thana')->where('country_id', $id)->get();
        /*  print_r(thana);
          exit();*/
        return $thana;

    }

    public function get_upazila($id)
    {

        $upazila = \DB::table('upazila')->where('thana_id', $id)->get();
        /*  print_r(upazila);
            exit();*/

        return $upazila;

    }

    public function get_name($id)
    {

        $name = \DB::table('name')->where('name_id', $id)->get();
        /*  print_r(upazila);
            exit();*/

        return $name;


    }
}

