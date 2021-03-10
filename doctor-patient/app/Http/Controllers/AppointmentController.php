<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class AppointmentController extends Controller
{
    
    public function index()
    {
        $result['data']=Appointment::all();
        return view('doctor/appointments',$result);
    }

    public function appointment($id='')
    {
        // $result['user']=DB::table('users')->get();
        // return view('front/appointment',$result);

        
        if($id>0){
            $arr=DB::table('users')->where(['id'=>$id])->get();
            $result['name']=$arr['0']->name;
            $result['email']=$arr['0']->email;
            $result['user_number']=$arr['0']->user_number;
            $result['user_address']=$arr['0']->user_address;
            $result['user_age']=$arr['0']->user_age;
            $result['user_gender']=$arr['0']->user_gender;
            $result['id']=$arr['0']->id;

        }
        else{
            
            $result['name']=$arr['0']='';
            $result['email']=$arr['0']='';
            $result['user_number']=$arr['0']='';
            $result['user_address']=$arr['0']='';
            $result['user_age']=$arr['0']='';
            $result['user_gender']=$arr['0']='';
            $result['id']=0;

        }
        $result['patient']=DB::table('appointments')->where(['id'=>$id])->get();
        return view('front/appointment',$result);

    }
    
    

    public function indexdash()
    {
        $result['data']=Appointment::all()->where('user_status', 1);
        $patient_count['count']=DB::table('users')->count();

        $attend_count['acount']=DB::table('appointments')->where('user_status', '<=', 0)->count();
        $pending_count['pcount']=DB::table('appointments')->where('user_status', '<=', 1)->count();

        return view('doctor/dashboard')->with($result)->with($patient_count)->with($attend_count)->with($pending_count);
    }
    public function indexpatient()
    { 
        $result['data']=Appointment::all();
        return view('doctor/patient',$result);
    }
   

    public function appointment_submit(Request $request)
    {
        $request->validate([
            'uname'=>'required',
            'uemail'=>'required',
            'uno'=>'required',         
            'uage'=>'required',
            'usymptoms'=>'required',
            'udate'=>'required',
    
           ]);
           
           $res=new appointment;
           $res->patient_id= Auth::user()->id ;
           $res->user_name=$request->input('uname');
           $res->user_email=$request->input('uemail');
           $res->user_number=$request->input('uno');
           $res->user_age=$request->input('uage');
           $res->user_symptoms=$request->input('usymptoms');
           $res->user_date=$request->input('udate');
           $res->user_status=1;
           $res->save();   
           $request->session()->flash('msg','Your Appointment is Booked! Thanks for Appointment :)');          
           $result=Auth::user()->id;
        //    return redirect('/appointment' );
           return redirect()->route('front.appointment', [$result]);
    
    }





    public function delete(Request $request , $id)
    {
     $model=Appointment::find($id);
     $model->delete();
     $request->session()->flash('message','Appointment Deleted');
     return redirect('doctor/appointment');
    }

    public function status(Request $request , $user_status,$id)
    {
     $model=Appointment::find($id);
     $model->user_status=$user_status;
     $model->save();
     $request->session()->flash('message','Status Updated');
     return redirect('doctor/appointment');
    }

   

}
