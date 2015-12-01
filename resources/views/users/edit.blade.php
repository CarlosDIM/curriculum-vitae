@extends('layouts.admin')
@section('content')
@include('alerts.request')
@include('alerts.success')

    {!!Form::model($user,['route'=> ['users.update',$user->id ],'method'=>'PUT' ])!!}

    @include('users.forms.usr')

    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}

    {!!Form::close()!!}
@endsection