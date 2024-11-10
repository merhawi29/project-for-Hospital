<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function addview()
    {
       
        return view('admin.add_view_doctor');
    }
    public function upload(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'Speciality' => 'required',
        //     'roomNumber' => 'required',
        //     'image' => 'required',
        // ]);

        

        $doctor = new doctor;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->Speciality = $request->Speciality;
        $doctor->Room = $request->roomNumber;

        $doctor->save();

        return redirect()->back()->with('message','Add doctor success!');
    }
}
