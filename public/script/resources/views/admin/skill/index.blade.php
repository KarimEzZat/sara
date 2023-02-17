@extends('layouts.backend.app',[
    'title' => 'Manage Skill',
    'pageTitle' => 'Manage Skill',
])
@section('content')
@include('layouts.components.datatables')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('skill.create') }}" class="btn btn-primary btn-sm">Add Skills</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Percent</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skills as $skill)
                    <tr>
                        <td>{{ $skill->skill }}</td>
                        <td><span class="badge badge-red">{{ $skill->percent }} %</span></td>
                        <td>
                            <div class="row mx-auto">
                                <a href="{{ route('skill.edit',$skill->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                <form method="POST" action="{{ route('skill.destroy',$skill->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete Skill ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
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
