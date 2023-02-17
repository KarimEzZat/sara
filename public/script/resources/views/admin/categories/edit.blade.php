@extends('layouts.backend.app',[
	'title' => 'Edit Category',
	'pageTitle' => 'Edit Category',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('categories.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                           type="text" value="{{ $category->name }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js-script')
    @include('layouts.components.inputScript')
@stop

