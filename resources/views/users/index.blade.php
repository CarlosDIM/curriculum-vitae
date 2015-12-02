@extends('layouts.admin')

@section('content')
@include('alerts.success')

    <table class="table">
        <thead>
            <th>
                Nombre
            </th>
            <th>
                Email
            </th>
            <th>
                Activo
            </th>
            <th>
                Operación
            </th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email }}</td>
                <td>{{$user->sw_activo}}</td>
                <td>{!!link_to_route('users.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {!! $users->render() !!}

@endsection