<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends Controller
{

    public function submt(){

        return view('welcome');
    }
    public function addcour()
    {
        return view('layouts.add');
    }

    public function store( Request $request)
    {


        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'roll'=>$request->roll,
            'section'=>$request->section,
            'class'=>$request->class,

            'created_at' => date('Y-m-d h:m:s'),

        ]);

        return back()->with('student.store','Submitted Successfully');
    }
    public function admin(){

        return view('welcome');
    }
}
