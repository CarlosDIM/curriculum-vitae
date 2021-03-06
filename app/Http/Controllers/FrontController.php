<?php

namespace cv\Http\Controllers;

use Illuminate\Http\Request;
use cv\Http\Requests;
use cv\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only'=>'admin']);
    }
    public function index()
    {
        return view('index');
    }
    public  function admin()
    {
        return view('admin.index');
    }
    public  function description()
    {
        return view('description');
    }
    public  function experiences()
    {
        return view('experiences');
    }
    public  function works()
    {
        return view('works');
    }
    public  function contact()
    {
        return view('contact');
    }


}
