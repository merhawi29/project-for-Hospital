<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\appointment;

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
    public function showappointment()
    {
        $appoint = appointment::all();
        return view('admin.showappointment',compact('appoint'));
    }
    public function Approved($id)
    {
        $appoint = appointment::find($id);
        $appoint->status = "Approved";

        $appoint->save();
        return redirect()->back();
    }
    public function cancle($id)
    {
        $appoint = appointment::find($id);
        $appoint->status = "cancle";

        $appoint->save();
        return redirect()->back();
    }
    public function Alldoctor()
    {
        $data = doctor::all();
        return view('admin.Alldoctor',compact('data'));
    }
    public function Deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function Updatedoctor($id)
    {
        $data = doctor::find($id);;
        return view('admin.update-doctor',compact('data'));
    }
    public function edit_doctor(Request $request ,$id)
    {
       $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->Speciality = $request->Speciality;
        $doctor->Room = $request->roomNumber;
        $image = $request->image;
        if($image)
        {
            $imagename = time().".".$image->getClientOriginalExtension();
            $request->image->move('doctorimage',$imagename);
            $doctor->image  = $imagename;
        }
        $doctor->save();
        return redirect()->back();
    }
}