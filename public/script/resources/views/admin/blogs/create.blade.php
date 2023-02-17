@extends('layouts.backend.app', [
    'title' => 'Create Blog',
    'pageTitle' => 'Create Blog',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('blogs.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                           type="text" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                              id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="customFile">Image</label>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror"
                               id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                        <small>Image dimensions: min_width=704px & min_height=460px</small>
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
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
