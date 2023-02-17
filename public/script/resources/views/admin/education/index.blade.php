@extends('layouts.backend.app',[
    'title' => 'Manage Education',
    'pageTitle' => 'Manage Education',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('education.create') }}" class="btn btn-primary btn-sm">Add Education</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($education_items as $education)
                        <tr>
                            <td>{{ $education->title }}</td>
                            <td>{{ $education->date }}</td>
                            <td>{{ Str::limit($education->description, 50) }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('education.edit',$education->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('education.destroy',$education->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Education ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
