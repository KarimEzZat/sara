@extends('layouts.backend.app',[
    'title' => 'Manage Experiences',
    'pageTitle' => 'Manage Experiences',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('experiences.create') }}" class="btn btn-primary btn-sm">Add Experience</a>
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
                    @foreach($experiences as $experience)
                        <tr>
                            <td>{{ $experience->title }}</td>
                            <td>{{ $experience->date }}</td>
                            <td>{{ Str::limit($experience->description, 50) }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('experiences.edit',$experience->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('experiences.destroy',$experience->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Experience ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
