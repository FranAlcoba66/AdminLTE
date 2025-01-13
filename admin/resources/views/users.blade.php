@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users Management</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Users List</h3>
        <form action="{{ route('users') }}" method="GET" class="form-inline float-right">
            <div class="input-group">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar usuarios..." value="{{ request()->get('search') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-info btn-sm">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Roles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td></td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Enlaces de paginación -->
        <div class="d-flex justify-content-center">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection

@section('css')
{{-- Puedes agregar hojas de estilo personalizadas aquí --}}
<style>
</style>
@stop

@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
