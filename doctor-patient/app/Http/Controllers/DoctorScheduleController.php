<?php

namespace App\Http\Controllers;

use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DoctorScheduleController extends Controller
{
    public function index()
    {
        $result['data']=DoctorSchedule::all();
        $doctor_name['name']=DB::table('doctors')->get();
        return view('doctor.doctor_schedule')->with($result)->with($doctor_name);
    }
    
    public function manage_schedule($id='')
    {
        if($id>0){
            $arr=DoctorSchedule::where(['id'=>$id])->get();
            $result['available_date']=$arr['0']->available_date;
            $result['start_time']=$arr['0']->start_time;
            $result['end_time']=$arr['0']->end_time;
            $result['available_status']=$arr['0']->available_status;
            $result['id']=$arr['0']->id;
        }
        else{
            
            $result['available_date']=$arr['0']='';
            $result['start_time']=$arr['0']='';
            $result['end_time']=$arr['0']='';
            $result['available_status']=$arr['0']='';
            $result['id']=0;

        }
       
        $result['schedule']=DB::table('doctor_schedules')->get();
        $doctor_name['name']=DB::table('doctors')->get();
        return view('doctor/manage_schedule')->with($result)->with($doctor_name);

    }
  
    public function manage_schedule_process(Request $request)
    {


        if($request->post('id')>0){
            $model=DoctorSchedule::find($request->post('id'));
            $msg="Schedule Updated";
         }
         else{
            $model=new DoctorSchedule();
            $msg="Schedule Inserted";
    
        }
        $today = date('d/m/Y');
        $today = explode('/',$today);
       $nextday = date('d/m/Y',mktime(0,0,0,$today[1],$today[0]+1,$today[2]));
       $model->available_date=  $nextday;
       $model->start_time=$request->post('start_time');
       $model->end_time=$request->post('end_time');
       $model->available_status=1;
       $model->save();
       $request->session()->flash('message',$msg);
       return redirect('doctor/schedule');

    }
  
    public function delete(Request $request , $id)
    {
     $model=DoctorSchedule::find($id);
     $model->delete();
     $request->session()->flash('message','Department Deleted');
     return redirect('doctor/schedule');
    }

    
    public function status(Request $request , $available_status,$id)
    {
     $model=DoctorSchedule::find($id);
     $model->available_status=$available_status;
     $model->save();
     $request->session()->flash('message','Status Updated');
     return redirect('doctor/schedule');
    }

}
