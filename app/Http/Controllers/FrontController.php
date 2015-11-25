<?php

namespace cv\Http\Controllers;

use Illuminate\Http\Request;
use cv\Http\Requests;
use cv\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public  function ourservices()
    {
        return view('ourservices');
    }
    public  function ourwork()
    {
        return view('ourwork');
    }
    public  function contact()
    {
        return view('contacto');
    }

}
