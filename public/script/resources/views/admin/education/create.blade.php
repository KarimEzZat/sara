@extends('layouts.backend.app',[
	'title' => 'Create Education',
	'pageTitle' => 'Create Education',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('education.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('education.store') }}">
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
                    <label for="date">Date</label>
                    <input class="form-control @error('date') is-invalid @enderror" name="date" id="date"
                           type="text" value="{{ old('date') }}">
                    <small>eg: 2011 - 2012</small>
                    @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                           type="text" value="{{ old('icon') }}">
                    <small>
                        eg: (fa-map-marker fa-fw) visit
                        <a target="_blank" href="https://fontawesome.com/v4/icons/">Fontawesome</a> &
                        <a target="_blank" href="https://iconmonstr.com/">iconmonstr</a>
                        to learn
                    </small>
                    @error('icon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="organisation">Organisation</label>
                    <input class="form-control @error('organisation') is-invalid @enderror" name="organisation"
                           id="organisation"
                           type="text" value="{{ old('organisation') }}">
                    @error('organisation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea cols="30" rows="5" class="form-control @error('description') is-invalid @enderror"
                              name="description"
                              id="description">{{ old('description') }}</textarea>
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

