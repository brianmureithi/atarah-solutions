<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.login');
    }

            
            public function store(Request $request){
             try{
                Admin::create($request->all());
        
                Alert::success('', 'Successfully logged in');
                return redirect()->back();
              } 
        catch(\Throwable $th){
                    throw $th;

                }
            }

}
