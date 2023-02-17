@extends('layouts.backend.app',[
    'title' => 'Manage Social Media',
    'pageTitle' => 'Manage Social Media',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('socials.create') }}" class="btn btn-primary btn-sm">Add Social Media</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($socials as $social)
                        <tr>
                            <td>{{ $social->icon }}</td>
                            <td>{{ $social->link }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('socials.edit',$social->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('socials.destroy',$social->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Social Media Link ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
