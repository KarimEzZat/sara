@extends('layouts.backend.app', [
    'title' => 'Manage User',
    'pageTitle' => 'Manage User',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Create User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(Auth::user()->isAdmin())
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <img width="50px" src="{{ asset('uploads/image/user/' . $user->image) }}"
                                        alt="User Avatar" />
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="row mx-auto">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fas fa-edit fa-fw"></i></a>
                                        <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete that?')"
                                                class="btn btn-danger btn-sm ml-2"><i
                                                    class="fas fa-trash fa-fw"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>
                                <img width="50px" src="{{ asset('uploads/image/user/' . $user->image) }}"
                                    alt="User Avatar" />
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete that?')"
                                            class="btn btn-danger btn-sm ml-2"><i
                                                class="fas fa-trash fa-fw"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
