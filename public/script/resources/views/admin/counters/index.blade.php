@extends('layouts.backend.app',[
    'title' => 'Manage Counters',
    'pageTitle' => 'Manage Counters',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('counters.create') }}" class="btn btn-primary btn-sm">Add Counter</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Number</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($counters as $counter)
                        <tr>
                            <td>{{ $counter->title }}</td>
                            <td>{{ $counter->number }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('counters.edit',$counter->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('counters.destroy',$counter->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Counter ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
