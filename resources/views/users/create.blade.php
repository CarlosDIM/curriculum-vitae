@extends('layouts.admin')

@section('content')
@include('alerts.request')
@include('alerts.success')

    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}

    @include('users.forms.usr')

    {!! Form::submit('Resgistrar',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection