<?php

namespace App\Http\Controllers;
use Newsletter;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){

        return view('home.index');
    }
    public function store(Request $request)
{
    if ( ! Newsletter::isSubscribed($request->user_email) ) {
        Newsletter::subscribe($request->user_email);
    }
}
    //
}
