@extends('layouts.backend.app',[
    'title' => 'Manage Footer',
    'pageTitle' => 'Manage Footer',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-footer py-3">
            <a href="{{ route('footer.create') }}" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Owner</th>
                        <th>Copyright</th>
                        <th>Url</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($footers as $footer)
                        <tr>
                            <td>{{ $footer->owner }}</td>
                            <td>{{ $footer->copyright }}</td>
                            <td>{{ $footer->url }}</td>
                            <td>{!! $footer->is_active ?  "<span class='px-2 bg-red text-white'>Active</span>" : "<span class='px-2 badge-dark'>Not active</span>"  !!}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('footer.edit',$footer->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('footer.destroy',$footer->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Footer ?')"
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
