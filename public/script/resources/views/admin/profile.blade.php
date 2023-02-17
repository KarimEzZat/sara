@extends('layouts.backend.app', [
    'title' => 'Profile',
    'pageTitle' => 'Profile',
])
@section('content')
    <div class="row">

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-red">
                    <h5 class="text-white">Profile</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.profile.update', Auth::user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror"
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
                                id="email" value="{{ Auth::user()->email }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id"
                                id="role_id">
                                @if (Auth::user()->role_id == 1 && Auth::user()->name)
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                @else
                                    <option value="{{ Auth::user()->role->id }}">{{ Auth::user()->role->name }}</option>
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
                                <input type="file" name="image"
                                    class="custom-file-input @error('image') is-invalid @enderror" id="customFile">
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
                            <img class="img-thumbnail" src="{{ asset('uploads/image/user/' . Auth::user()->image) }}"
                                alt="avatar image">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                name="password" id="password">
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
        </div>

    </div>
@stop
