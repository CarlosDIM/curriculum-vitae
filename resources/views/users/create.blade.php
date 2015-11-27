@extends('layouts.admin')

@section('content')

    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}

        <div class ="form-group">
            {!! Form::label('Nombre:') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario']) !!}
        </div>

        <div class ="form-group">
            {!! Form::label('Correo:') !!}
            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese el email del usuario']) !!}
        </div>

        <div class ="form-group">
            {!! Form::label('password:') !!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese el password']) !!}
        </div>

        <div>
            {!! Form::label('activo:') !!}
            {!! Form::checkbox('sw_activo', 'value', true) !!}
        </div>

        {!! Form::submit('resgistrar',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection