@extends('layouts.log')

@section('content')
@extends('alerts.request')

    {!! Form::open(['route'=>'log.store','method'=>'POST']) !!}

    <div class ="form-group">
        {!! Form::label('email:') !!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese el email del usuario']) !!}
    </div>

    <div class ="form-group">
        {!! Form::label('password:') !!}
        {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese el password']) !!}
    </div>

    <div class ="form-group">

        {!! Form::checkbox('Remember Me', 'Remember Me', true) !!}
    </div>

        {!! Form::submit('login',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection

