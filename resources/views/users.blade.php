@extends('master')

@section('content')
    
    <div class="container">
        <div class="mt-3 mb-3 d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-secondary">New User</a>
        </div>
        @if (\Session::has('message'))
            <div class="alert alert-warning">
                {!! \Session::get('message') !!}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Role</th>
                <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="/users/{{ $user->id }}/edit" type="button" class="btn btn-secondary mr-2">
                                <i class="bi bi-pencil-square"></i>   
                            </a>
                            <form action="/users/{{ $user->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(!$users->count())
            <div class="alert alert-warning">Sin registros disponibles de usuarios.</div>
        @endif
    </div>
  
@endsection
