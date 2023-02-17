@extends('layouts.backend.app', [
    'title' => 'Edit User',
    'pageTitle' => 'Edit User',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('user.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror"
                        type="text" name="name" id="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        id="email" value="{{ $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role_id">Role</label>
                    <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
                        @if ($user->role_id == 1 && $user->name)
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        @else
                            <option value="{{ $user->role->id }}">{{ $user->role->name }}</option>
                        @endif
                    </select>
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Avatar</label>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror"
                            id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                        <small>Image dimensions should be 50 x 50</small>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <img class="img-thumbnail" src="{{ asset('uploads/image/user/' . $user->image) }}" alt="avatar image">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                        id="password">
                    <small class="text-secondary">leave the password blank if you want to keep it the same</small>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
@stop
