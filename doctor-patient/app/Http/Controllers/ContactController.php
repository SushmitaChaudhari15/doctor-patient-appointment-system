<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    { 

        $details=[
         'name'=> $request->cname,
         'email'=> $request->cemail,
         'phone_number'=> $request->cphone_number,
         'msg_subject'=> $request->cmsg_subject,
         'message'=> $request->cmessage,
        ];

        Mail::to('sushmitachaudhari15@gmail.com')->send(new ContactMail($details));
        
           $res=new Contact;
           $res->contact_name=$request->input('cname');
           $res->contact_email=$request->input('cemail');
           $res->contact_number=$request->input('cphone_number');
           $res->contact_subject=$request->input('cmsg_subject');
           $res->contact_message=$request->input('cmessage');
           $res->save();   
           $request->session()->flash('msg','Thanks for Contact us');          
           return redirect('/contact');
    
    }


}
