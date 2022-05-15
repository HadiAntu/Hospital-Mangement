<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appoinment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                $doctor=doctor::all();
                return view('user.home', compact('doctor'));
            } 
            
            else
            {
                return view('admin.home');
            }
        }
        
        
        else {
            return redirect()->back();
        }
        
    }

    public function index()
    {
        // if (Auth::id())
        // {
        //     return redirect('home');
        // }

        // else{}

        


        $doctor=doctor::all();
        return view('user.home', compact('doctor'));
    
    }

    public function appoinment(Request $req)
    {
        $data= new appoinment;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->date=$req->date;
        $data->doctor=$req->doctor;
        $data->message=$req->message;
        $data->status='In Progress';
        if (Auth::id())
        {
           
            $data->userid=Auth::user()->id;
        }
        else{
            return('error');
        }

        $data->save();
        return redirect()->back()->with('message', 'Your Appoinment Is Submited We Will Contact You Soon');
        
    }

    public function myappoinment()
    {
        if (Auth::id())
        {


            $userid= Auth::id();
            $appoint= appoinment::where('userid' ,$userid)->get();

            return view('user.myappoinment', compact('appoint'));
            
        }

        else{
            return redirect()->back();
        }
    }


    public function cancelappoinment($id)
    {
        $data= appoinment::find($id);
        $data->delete();

        return redirect()->back();
    }
   
}
