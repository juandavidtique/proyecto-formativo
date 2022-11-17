@extends('layouts.main')

@section('titulo', 'Detalle del Usuario')

@section('content')
    <div class="row my-3">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <table class="table table-bordered mt-3">
                <tbody>
                    <tr>
                        <td class="fw-bold">Nombre</td>
                        <td>{{ $user->name}}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Correo Electronico</td>
                        <td>{{ $user->email}}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
        </div>

    </div>

@endsection