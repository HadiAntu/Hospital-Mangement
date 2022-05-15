<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Appoinment;

use Illuminate\Http\Request;
use Notification;
use App\Notifications\FirstNoti;

class AdminController extends Controller
{
    public function addDoctor()
    {
        return view('admin.add-doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->file= $imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }


    public function allappoinments()
    {

       
        $data= appoinment::all();
        return view('admin.allappoinments', compact('data'));
        
        
        
    }
    public function home()
    {

       
        $data= appoinment::all();
        return view('admin.home', compact('data'));
        
        
        
    }



    public function approveappoinment($id)
    {
        $data= appoinment::find($id);
        $data->status='Approved';

        $data->save();

        return redirect()->back();
    }
    public function cancelappoinment($id)
    {
        $data= appoinment::find($id);
        $data->status='cancel';

        $data->save();

        return redirect()->back();
    }

    public function alldoctors()
    {

       
        $data= doctor::all();
        return view('admin.alldoctors', compact('data'));
        
        
        
    }

    public function deletedoctor($id)
    {
        $data= doctor::find($id);
        

        $data->delete();

        return redirect()->back();
    }


    public function updatedoctor($id)
    {
        
        $data= doctor::find($id);
        return view('admin.updatedoctor', compact('data'));
        
    }


    public function editdoctor(Request $request, $id)
    {

        
        $data= doctor::findOrFail($request->id);
        $image=$request->file;
        if ($image)
        {
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $data->file= $imagename;
        }
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->room=$request->room;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back()->with('message', 'Doctor Added Updated');

        
    }


    public function sendmail($id)
    {
        $data=appoinment::find($id);
        return view('admin.sendmail',compact('data'));
    }
    public function sending(Request $req,$id)
    {
        $data=appoinment::find($id);
        $details=[
            'greeting'=>  $req->greeting,
            'body'=>  $req->body,
            'actiontext'=>  $req->actiontext,
            'actionurl'=>  $req->actionurl,
            'endpart'=>  $req->endpart
        ];

        Notification::send($data, new FirstNoti($details));

        return redirect()->back()->with('message', 'Doctor Added Updated');
        
    }





}
