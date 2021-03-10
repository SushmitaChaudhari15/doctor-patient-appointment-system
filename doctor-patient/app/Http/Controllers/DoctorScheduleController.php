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
        return view('doctor.doctor_schedule',$result);
    }
    
    public function manage_schedule($id)
    {
            $arr=DoctorSchedule::where(['id'=>$id])->get();
            $result['available_date']=$arr['0']->available_date;
            $result['available_time']=$arr['0']->available_time;
            $result['available_status']=$arr['0']->available_status;
            $result['id']=$arr['0']->id;

       
        $result['schedule']=DB::table('doctor_schedules')->where(['available_status'=>1])->get();
        return view('doctor/manage_schedule',$result);

    }
  
    public function manage_schedule_process(Request $request)
    {
       $model=DoctorSchedule::find($request->post('id'));
        $msg="Schedule Updated";
       
       $model->available_date='';
       $model->available_time=$request->post('available_time');
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
