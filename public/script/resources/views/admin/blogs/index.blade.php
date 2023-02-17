@extends('layouts.backend.app',[
    'title' => 'Manage Blogs',
    'pageTitle' => 'Manage Blogs',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-footer py-3">
            <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>
                                <img src="{{ asset('uploads/image/blog/' . $blog->image) }}" width="100"
                                     alt="Blog Image">
                            </td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ Str::limit($blog->description , 50)}}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('blogs.destroy',$blog->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Blog ?')"
                                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                        </button>
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
