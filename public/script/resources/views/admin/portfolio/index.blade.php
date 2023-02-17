@extends('layouts.backend.app',[
    'title' => 'Manage Portfolio',
    'pageTitle' => 'Manage Portfolio',
])
@section('content')
@include('layouts.components.datatables')
<div class="card shadow mb-4">
    <div class="card-footer py-3">
        <a href="{{ route('works.create') }}" class="btn btn-primary btn-sm">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($works as $work)
                    <tr>
                        <td>
                            <img src="{{ asset('uploads/image/works/' . $work->image) }}" width="100" alt="Portfolio Image">
                        </td>
                        <td>{{ $work->title }}</td>
                        <td>{{ $work->category->name }}</td>
                        <td>
                            <div class="row mx-auto">
                                <a href="{{ route('works.edit',$work->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                <form method="POST" action="{{ route('works.destroy',$work->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete Work ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
