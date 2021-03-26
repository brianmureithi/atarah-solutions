<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactPageController extends Controller
{
    public function index(){

        return view('contact.index');
    }
   
    public function store(Request $request){
        try{
Contact::create($request->all());
 
 Alert::success('Email Sent', 'We have received your message and would like to thank you for writing to us.');
 return redirect()->back();
        } 
        catch(\Throwable $th){
            throw $th;

        }

}

    //
}
