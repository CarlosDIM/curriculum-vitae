@extends('layouts.admin')
@section('content')
@include('alerts.request')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!!Session::get('message')!!}
    </div>
@endif

    {!!Form::model($user,['route'=> ['users.update',$user->id ],'method'=>'PUT' ])!!}

    @include('users.forms.usr')

    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}

    {!!Form::close()!!}
@endsection