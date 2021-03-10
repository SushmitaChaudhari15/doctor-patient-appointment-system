<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
class PatientController extends Controller
{
    public function index()
    {
        $result['data']=Patient::all();
        return view('front/patient_profile',$result);
    }

    public function indexpatient()
    { 
        $result['data']=DB::table('users')->get();
        return view('doctor/patient',$result);
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
        return view('front/patient_profile',$result);

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
    //    $model->user_address=$request->post('user_address');
    //    $model->save();
       $request->session()->flash('message',$msg);
       return redirect('user/dashboard');

    }

    public function deletepatient(Request $request , $id)
    {
     $model= DB::table('users')->where(['id'=>$id])->delete();
     $request->session()->flash('message','Patient Deleted');
     return redirect('doctor/patient');
    }

}
