<?php

namespace cv\Http\Controllers;

use cv\User;
use Illuminate\Http\Request;
use cv\Http\Requests;
use cv\Http\Requests\UserCreateRquest;
use cv\Http\Requests\UserUpdateRquest;
use cv\Http\Controllers\Controller;
use Session;
use Redirect;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate(10);
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRquest $request)
    {
            User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'sw_activo'=>$request['sw_Activo'],
        ]);

        Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRquest $request, $id)
    {
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
