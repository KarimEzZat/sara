@extends('layouts.backend.app',[
	'title' => 'Edit Service',
	'pageTitle' => 'Edit Service',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('services.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('services.update', $service->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                           type="text" value="{{ $service->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea cols="30" rows="5" class="form-control @error('description') is-invalid @enderror"
                              name="description" id="description">{{ $service->description }}</textarea>
                    @error('description')
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

