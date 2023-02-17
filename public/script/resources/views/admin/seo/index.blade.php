@extends('layouts.backend.app',[
    'title' => 'Manage Meta Tags',
    'pageTitle' => 'Manage Meta Tags',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('seo.create') }}" class="btn btn-primary btn-sm">Add Meta Tag</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($seos as $seo)
                        <tr>
                            <td>{{ $seo->name }}</td>
                            <td>{{ $seo->content }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('seo.edit',$seo->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('seo.destroy',$seo->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Meta Tag ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
