@extends('layouts.admin')

@section('content')
@include('alerts.request')
@if(Session::has('message'))

    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}

    </div>

@endif

    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}

    @include('users.forms.usr')

    {!! Form::submit('Resgistrar',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection