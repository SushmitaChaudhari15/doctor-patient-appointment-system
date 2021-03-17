<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
   
   
    public function index()
    {
        $result['data']=doctor::all();
        return view('doctor.doctor_profile',$result);
    }

    
    public function doctor_profile_manage($id='')
    {
      
        if($id>0){
            $arr=Doctor::where(['id'=>$id])->get();
            $result['doctor_name']=$arr['0']->doctor_name;
            $result['doctor_department']=$arr['0']->doctor_department;
            $result['doctor_email']=$arr['0']->doctor_email;
            $result['doctor_age']=$arr['0']->doctor_age;
            $result['doctor_address']=$arr['0']->doctor_address;
            $result['doctor_gender']=$arr['0']->doctor_gender;
            $result['doctor_number']=$arr['0']->doctor_number;
            $result['doctor_image']=$arr['0']->doctor_image;
            $result['id']=$arr['0']->id;

        }
        else{
            
            $result['doctor_name']=$arr['0']='';
            $result['doctor_department']=$arr['0']='';
            $result['doctor_email']=$arr['0']='';
            $result['doctor_age']=$arr['0']='';
            $result['doctor_address']=$arr['0']='';
            $result['doctor_gender']=$arr['0']='';
            $result['doctor_number']=$arr['0']='';
            $result['doctor_image']=$arr['0']='';
            $result['id']=0;

        }
       
        $result['schedule']=DB::table('doctors')->where(['doctor_status'=>0])->get();
        return view('doctor/doctor_profile_manage',$result);

    }
  
    public function doctor_profile_manage_process(Request $request)
    {
        
        // $model=Doctor::find($request->post('id'));
        // $msg="Profile Updated";

        if($request->post('id')>0){
            $model=Doctor::find($request->post('id'));
            $msg="Profile Updated";
         }
         else{
            $model=new Doctor();
            $msg="Profile Inserted";
    
        }

        if($request->has('doctor_image')){
            $image=$request->file('doctor_image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            
            $model->doctor_image=$image_name;
        
        }
       
      
 
       $model->doctor_name=$request->post('doctor_name');
       $model->doctor_department=$request->post('doctor_department');
       $model->doctor_email=$request->post('doctor_email');
       $model->doctor_age=$request->post('doctor_age');
       $model->doctor_address=$request->post('doctor_address');   
       $model->doctor_gender=$request->post('doctor_gender');
       $model->doctor_number=$request->post('doctor_number');
    //    $model->doctor_image=$request->post('doctor_image');    
       $model->doctor_status=1;
       $model->save();
       $request->session()->flash('message',$msg);
       return redirect('doctor/doctor_profile');

    }
  
}
