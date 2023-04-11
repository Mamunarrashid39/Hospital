<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Doctor;

class AdminController extends Controller
{
    public function addView()
    {
        return view('admin.add_doctor');
    }
    public function update(Request $request)
    {

        $doctor = new doctor;
        $image=$request->file ;
        $imagename=time().'.' .$image->getClientorginalExtentoon();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room =$request->room;
        $doctor->specilaty=$request->specilaty;
        $doctor->save();
         return redirect()->back();

    }
}
