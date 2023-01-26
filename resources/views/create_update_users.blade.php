@extends('master')

@section('content')

    <div class="container">
        <div class="mt-3 mb-3 d-flex justify-content-end">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>
        <div class="d-flex justify-content-center">
            <form class="col-6 border border-secondary-subtle bg-secondary-subtle p-5" @if(!isset($user)) action={{ Route('users.store') }} @else action="/users/{{ $user->id }}" @endif method="post">
                @csrf
                @if (isset($user))
                    @method("PUT")
                @endif
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="{{ $user->first_name ?? "" }}" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="{{ $user->last_name ?? "" }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="role_id" class="form-label">State</label>
                    <select id="role_id" class="form-select" name="role_id" required>
                      <option value="">Select role...</option>
                      @foreach ($roles as $role)
                          <option value="{{ $role->id }}" @if(isset($user) && $role->id == $user->role_id) selected @endif>{{ $role->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
