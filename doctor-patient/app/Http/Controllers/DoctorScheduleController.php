<?php

namespace App\Http\Controllers;

use App\Models\DoctorSchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    public function index()
    {
        $result['data']=DoctorSchedule::all();
        return view('doctor/doctor_schedule',$result);
    }

    public function manage_department($id='')
    {
        if($id>0){
            $arr=Doctor::where(['id'=>$id])->get();
            $result['doctor_department']=$arr['0']->doctor_department;
            $result['doctor_name']=$arr['0']->doctor_name;
            $result['doctor_email']=$arr['0']->doctor_email;
            $result['doctor_age']=$arr['0']->doctor_age;
            $result['doctor_status']=$arr['0']->doctor_status;
            $result['id']=$arr['0']->id;

        }
        else{
            
            $result['doctor_department']=$arr['0']='';
            $result['doctor_name']=$arr['0']='';
            $result['doctor_email']=$arr['0']='';
            $result['doctor_name']=$arr['0']='';
            $result['doctor_age']=$arr['0']='';
            $result['id']=0;

        }
        $result['department']=DB::table('doctors')->where(['doctor_status'=>1])->get();
        return view('doctor/manage_department',$result);

    }
  
    public function manage_department_process(Request $request)
    {
      
       $request->validate([
        'departname'=>'required',
        'dname'=>'required',
        'demail'=>'required',
        'dage'=>'required',
        

       ]);

       if($request->post('id')>0){
           $model=Doctor::find($request->post('id'));
           $msg="Doctor Updated";
        }
        else{
           $model=new Doctor();
           $msg="Doctor Inserted";

       }
       $model->doctor_department=$request->post('departname');
       $model->doctor_name=$request->post('dname');
       $model->doctor_email=$request->post('demail');
       $model->doctor_age=$request->post('dage');
       $model->doctor_status=1;
       $model->save();
       $request->session()->flash('message',$msg);
       return redirect('doctor/department');

    }
  
    public function delete(Request $request , $id)
    {
     $model=Doctor::find($id);
     $model->delete();
     $request->session()->flash('message','Department Deleted');
     return redirect('doctor/department');
    }

}
