@extends('layouts.admin')

@section('content')

        {!! Form::open() !!}
            @include('experiences.form.expr')
        {!! Form::close() !!}
@endsection