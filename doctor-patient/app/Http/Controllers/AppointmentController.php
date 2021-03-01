<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AppointmentController extends Controller
{
    
    public function index()
    {
        $result['data']=Appointment::all();
        return view('doctor/appointments',$result);
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
            'uaddress'=>'required',
            'uage'=>'required',
            'ucategory'=>'required',
            'udoctor'=>'required',
            'udate'=>'required',
    
           ]);

           $res=new appointment;
           $res->user_name=$request->input('uname');
           $res->user_email=$request->input('uemail');
           $res->user_number=$request->input('uno');
           $res->user_address=$request->input('uaddress');
           $res->user_age=$request->input('uage');
           $res->user_category=$request->input('ucategory');
           $res->user_doctor=$request->input('udoctor');
           $res->user_date=$request->input('udate');
           $res->user_status=1;

           $res->save();   
           $request->session()->flash('msg','Your Appointment is Booked! Thanks for Appointment :)');          
           return redirect('/appointment');
    
    }

    public function manage_patient($id='')
    {
        if($id>0){
            $arr=Appointment::where(['id'=>$id])->get();
            $result['user_name']=$arr['0']->user_name;
            $result['user_email']=$arr['0']->user_email;
            $result['user_number']=$arr['0']->user_number;
            $result['user_address']=$arr['0']->user_address;
            $result['user_age']=$arr['0']->user_age;
            $result['user_date']=$arr['0']->user_date;
            $result['user_category']=$arr['0']->user_category;
            $result['user_doctor']=$arr['0']->user_doctor;
            $result['user_status']=$arr['0']->user_status;
            $result['id']=$arr['0']->id;

        }
        else{
            
            $result['user_name']=$arr['0']='';
            $result['user_email']=$arr['0']='';
            $result['user_number']=$arr['0']='';
            $result['user_address']=$arr['0']='';
            $result['user_age']=$arr['0']='';
            $result['user_date']=$arr['0']='';
            $result['user_category']=$arr['0']='';
            $result['user_doctor']=$arr['0']='';
            $result['user_status']=$arr['0']='';
            $result['id']=0;

        }
        $result['patient']=DB::table('appointments')->where(['user_status'=>1])->get();
        return view('doctor/manage_patient',$result);

    }
  
    public function manage_patient_process(Request $request)
    {
        
    //    $request->validate([
       
    //     'pname'=>'required',
    //     'pemail'=>'required',
    //     'pno'=>'required',
    //     'page'=>'required',
    //     'padddress'=>'required',
    //     'pcategory'=>'required',
    //     'pdoctor'=>'required',
    //     'pdate'=>'required',

    //    ]);

       if($request->post('id')>0){
           $model=Appointment::find($request->post('id'));
           $msg="Patient Updated";
        }
        else{
           $model=new Appointment();
           $msg="Patient Inserted";

       }
       
       $model->user_name=$request->post('pname');
       $model->user_email=$request->post('pemail');
       $model->user_age=$request->post('page');
       $model->user_address=$request->post('paddress');
       $model->user_number=$request->post('pno');
       $model->user_category=$request->post('pcategory');
       $model->user_doctor=$request->post('pdoctor');
       $model->user_date=$request->post('pdate');
       $model->user_status=1;
       $model->save();
       $request->session()->flash('message',$msg);
       return redirect('doctor/patient');

    }


    public function deletepatient(Request $request , $id)
    {
     $model=Appointment::find($id);
     $model->delete();
     $request->session()->flash('message','Patient Deleted');
     return redirect('doctor/patient');
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
