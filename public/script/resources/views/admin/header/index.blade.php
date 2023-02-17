@extends('layouts.backend.app', [
    'title' => 'Manage Header',
    'pageTitle' => 'Manage Header',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('header.create') }}" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Hero Title</th>
                        <th>Animated Text</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($headers as $header)
                        <tr>
                            <td><img src="{{ asset('uploads/image/header/' . $header->image) }}" width="50"
                                     height="50" alt="Hero Area Image"></td>
                            <td>{{ $header->hero_title }}</td>
                            <td>{{ $header->animated_text }}</td>
                            <td>{!! $header->is_active ?  "<span class='px-2 bg-red text-white'>Active</span>" : "<span class='px-2 badge-dark'>Not active</span>"  !!}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('header.edit', $header->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('header.destroy', $header->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete that?')"
                                                class="btn btn-danger btn-sm ml-2"><i
                                                class="fas fa-trash fa-fw"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
