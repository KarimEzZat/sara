@extends('layouts.backend.app',[
    'title' => 'Manage About',
    'pageTitle' => 'Manage About',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-footer py-3">
            <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Active</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                        <tr>
                            <td>
                                <img src="{{ asset('uploads/image/about/'.$about->image) }}" width="50"
                                     alt="about image">
                            </td>
                            <td>{!! $about->title !!}</td>
                            <td>{!! $about->is_active ?  "<span class='px-2 bg-red text-white'>Active</span>" : "<span class='px-2 badge-dark'>Not active</span>"  !!}</td>
                            <td>{{ $about->name }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('about.edit',$about->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('about.destroy',$about->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure to delete?')"
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
