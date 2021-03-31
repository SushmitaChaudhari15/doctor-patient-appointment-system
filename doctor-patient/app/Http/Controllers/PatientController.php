<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
class PatientController extends Controller
{
    public function index($id)
    {

        $arr=DB::table('users')->where(['id'=>$id])->get();
        $result['user_address']=$arr['0']->user_address;
        $result['user_age']=$arr['0']->user_age;
        $result['user_number']=$arr['0']->user_number;
        $result['user_gender']=$arr['0']->user_gender;
        $result['id']=$arr['0']->id;
        return view('front/patient_profile',$result);
    }

    public function indexpatient()
    { 
        $result['data']=DB::table('users')->where('utype','USR')->get();
        $doctor_name['name']=DB::table('doctors')->get();
        return view('doctor/patient')->with($result)->with($doctor_name);
    }
   
    public function manage_patient_profile($id)
    {
            $arr=DB::table('users')->where(['id'=>$id])->get();
            $result['user_address']=$arr['0']->user_address;
            $result['user_age']=$arr['0']->user_age;
            $result['user_number']=$arr['0']->user_number;
            $result['user_gender']=$arr['0']->user_gender;
            $result['id']=$arr['0']->id;

       
        $result['user']=DB::table('users')->where(['id'=>$id])->get();
        return view('front/manage_patient_profile',$result);

    }
  
    public function manage_patient_profile_process(Request $request)
    {
       $model=DB::table('users')->where('id', $request->post('id'))->update([
           'user_address' => $request->post('user_address'),
           'user_age' => $request->post('user_age'),
           'user_number' => $request->post('user_number'),
           'user_gender' => $request->post('user_gender')
           ]);
       $msg="Profile Updated";       
       $request->session()->flash('message',$msg);
    return redirect()->route('patient/patient_profile', ['id' => $request->post('id')]);
    }

    public function deletepatient(Request $request , $id)
    {
     $model= DB::table('users')->where(['id'=>$id])->delete();
     $request->session()->flash('message','Patient Deleted');
     return redirect('doctor/patient');
    }

    public function report()
    {
        $result['data']= DB::table('users')->where('utype','USR')->count();
        $appoint['appoint']= DB::table('appointments')->count();
        $attend['attend']= DB::table('appointments')->where('user_status',0)->count();
        $pending['pending']= DB::table('appointments')->where('user_status',1)->count();
        $doctor_name['name']=DB::table('doctors')->get();
        return view('doctor.report')->with($result)->with($appoint)->with($attend)->with($pending)->with($doctor_name);
    }
    
    

    public function check_date($id=""){
        $doctor_name['name']=DB::table('doctors')->get();
        return view('doctor.check_date')->with('id',$id)->with($doctor_name);    
    }


    public function total_patient(Request $request)
    {
        if ($request->input('from_date')<>'' && $request->input('to_date')<>'')
        {    
           
            $start = date("Y-m-d",strtotime($request->input('from_date')));
            $end = date("Y-m-d",strtotime($request->input('to_date')."+1 day"));

            $result['data']=  DB::table('users')->whereBetween('created_at',[$start,$end])->where('utype','USR')->get();
            if( $start < $end){

                    if($result['data']->count()>0){
                    return view('doctor.total_patient')->with($result);
                    }
                    else{
                        $request->session()->flash('message','No Record Found!');
                        return view('doctor.total_patient')->with($result);
                    }

            }
            else{
                $doctor_name['name']=DB::table('doctors')->get();
                $request->session()->flash('message','From-date is greater than To-date! Please Change');
                return view('doctor.total_patient')->with($result);
            }
        }
        

    }



    public function total_appointment(Request $request)
    {
        if ($request->input('from_date')<>'' && $request->input('to_date')<>'')
        {    
           
            $start = date("Y-m-d",strtotime($request->input('from_date')));
            $end = date("Y-m-d",strtotime($request->input('to_date')."+1 day"));

            $result['data']=  DB::table('appointments')->join('users','appointments.user_id', '=', 'users.id')
            ->select('appointments.id','appointments.user_date','appointments.user_time','appointments.user_symptoms','users.name','users.user_age','users.user_gender','users.user_number')
            ->whereBetween('appointments.created_at',[$start,$end])->get();
            if( $start < $end){

                    if($result['data']->count()>0){
                        return view('doctor.total_appointment')->with($result);
                    }
                    else{
                        $request->session()->flash('message','No Record Found!');
                        return view('doctor.total_appointment')->with($result);
                    }

            }
            else{
                $request->session()->flash('message','From-date is greater than To-date! Please Change');
                return view('doctor.total_appointment')->with($result);
            }
        }
      
    }

    
    public function total_attend_patient(Request $request)
    {
        if ($request->input('from_date')<>'' && $request->input('to_date')<>'')
        {    
           
            $start = date("Y-m-d",strtotime($request->input('from_date')));
            $end = date("Y-m-d",strtotime($request->input('to_date')."+1 day"));

            $result['data']=  DB::table('appointments')->join('users','appointments.user_id', '=', 'users.id')
            ->where('appointments.user_status',0)
            ->select('appointments.id','appointments.user_date','appointments.user_time','appointments.user_symptoms','users.name','users.user_age','users.user_gender','users.user_number')
            ->whereBetween('appointments.created_at',[$start,$end])->get();
            if( $start < $end){

                    if($result['data']->count()>0){
                        return view('doctor.total_attend_patient')->with($result);
                    }
                    else{
                        $request->session()->flash('message','No Record Found!');
                        return view('doctor.total_attend_patient')->with($result);
                    }

            }
            else{
                $doctor_name['name']=DB::table('doctors')->get();
                $request->session()->flash('message','From-date is greater than To-date! Please Change');
                return view('doctor.total_attend_patient')->with($result);
            }
        }

    }

    public function  total_pending_patient(Request $request)
    {
        if ($request->input('from_date')<>'' && $request->input('to_date')<>'')
        {    
           
            $start = date("Y-m-d",strtotime($request->input('from_date')));
            $end = date("Y-m-d",strtotime($request->input('to_date')."+1 day"));

            $result['data']=  DB::table('appointments')->join('users','appointments.user_id', '=', 'users.id')
            ->where('appointments.user_status',1)
            ->select('appointments.id','appointments.user_date','appointments.user_time','appointments.user_symptoms','users.name','users.user_age','users.user_gender','users.user_number')
            ->whereBetween('appointments.created_at',[$start,$end])->get();
            if( $start < $end){

                    if($result['data']->count()>0){
                        return view('doctor.total_pending_patient')->with($result);
                    }
                    else{
                        $request->session()->flash('message','No Record Found!');
                        return view('doctor.total_pending_patient')->with($result);
                    }

            }
            else{
                $doctor_name['name']=DB::table('doctors')->get();
                $request->session()->flash('message','From-date is greater than To-date! Please Change');
                return view('doctor.total_pending_patient')->with($result);
            }
        }

    }

 
}
