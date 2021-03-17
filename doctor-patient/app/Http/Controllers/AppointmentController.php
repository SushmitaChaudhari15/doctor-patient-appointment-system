<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;


class AppointmentController extends Controller
{
    
    public function index()
    {
        $result['data']=DB::table('appointments')
                ->join('users','appointments.user_id', '=', 'users.id')
                ->select('appointments.id','appointments.user_date','appointments.user_time','appointments.user_symptoms','appointments.user_status','users.name','users.user_age')
                ->get();

      
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

        $doctor['doc']=DB::table('doctor_schedules')->get();

        return view('front/appointment')->with($result)->with($doctor);

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
           $res=new appointment;
           $res->user_id= Auth::user()->id ;
           $res->user_time=$request->input('utime');
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
