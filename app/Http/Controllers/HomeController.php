<?php

namespace App\Http\Controllers;

use App\User;
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
        return view('Student.add');
    }

    public function store( Request $request)
    {
        $userObj = new User();
        $userObj->name = $request['name'];
        $userObj->email = $request['email'];
        $userObj->password = $request['password'];
        $userObj->roll = $request['roll'];
        $userObj->section = $request['section'];
        $userObj->class = $request['class'];
        if($userObj->save()){
            return back()->with('success','Submitted Successfully');
        }else{
            return back()->with('success','Cannot submit');
        }

//
//        DB::table('users')->insert([
//            'name'=>$request->name,
//            'email'=>$request->email,
//            'password'=>$request->password,
//            'roll'=>$request->roll,
//            'section'=>$request->section,
//            'class'=>$request->class,
//
//            'created_at' => date('Y-m-d h:m:s'),
//
//        ]);

//        return back()->with('success','Submitted Successfully');
    }
    public function admin(){

        return view('welcome');
    }

    public function studentList(){
        $userList = User::all();
        return view('Student.list')->with('userList',$userList);
    }
}
