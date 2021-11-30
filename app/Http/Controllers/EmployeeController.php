<?php

namespace App\Http\Controllers;

use App\Models\divission;
use App\Models\upazila;
use App\Models\thana;
use App\Models\name;
use App\Models\Employee;
use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
////        $test = DB::select(DB::raw("
////            SELECT *
////            FROM test"));
//
//        $divission = \DB::table('divission')->get();
////
//        $sum =DB::table('divission')->get()
////
//        -> JOIN ('test','test.divission_id','=', 'divission.id')
//         ->JOIN('upazila', 'test.upazila_id','=','upazila.id')
//            ->JOIN('thana', 'test.thana_id','=','thana.id')
//         ->get();
//
//
//        return view('dashboard')->with(["test" => $sum,"divission" => $divission]);
//
//    }
    public function index()
    {
//        $test = DB::select(DB::raw("
//            SELECT *
//            FROM test"));
        $divission = \DB::table('divission')->get();
        $test =DB::table('divission')->
      join('test','test.divission_id','=', 'divission.id')
           -> join('upazila','test.upazila_id','=','upazila.id')
            ->JOIN('thana', 'test.thana_id','=','thana.id')
            ->get();
        return view('dashboard')->with(["test" =>$test,"divission" => $divission]);

    }

    /**

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'emp' => 'required',
            'designation' => 'required'

        ]);
        DB::table('test')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'emp' => $request->input('emp'),
            'designation' => $request->input('designation'),
            'divission_id' => $request->divission,
            'thana_id' => $request->thana,
            'upazila_id' => $request->upazila,
//            'post_id'=>$request->names,


        ]);
        return redirect('/dashboard')->with('status', 'data inserted successfully');
    }


    public function edit($id)
    {
        $data = DB::table('test')->find($id);
        return view('edit', ["data" => $data]);
    }


    public function update(Request $req)
    {
        $sql = "update test set name = '$req->name' where id = '$req->id'";
        DB::statement($sql);
        session()->flash("success", "Session [" . $req->name . "] is updated successfully!");
        //return redirect()->back()->with('status','Student Updated Successfully');


        $sql = "update test set email = '$req->email' where id = '$req->id'";
        DB::statement($sql);


        $sql = "update test set designation = '$req->designation' where id = '$req->id'";
        DB::statement($sql);
        return redirect('/dashboard');
    }


    public function delete($id)
    {
        DB::table('test')->where('id', $id)->delete();

        return back();
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








}

