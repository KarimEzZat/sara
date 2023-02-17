@extends('layouts.backend.app',[
	'title' => 'Create Social Media',
	'pageTitle' => 'Create Social Media',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('socials.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('socials.store') }}">
                @csrf
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                           type="text" value="{{ old('icon') }}">
                    <small>
                        eg: (fa fa-facebook) visit
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
                    <label for="link">Link</label>
                    <input class="form-control @error('link') is-invalid @enderror" name="link" id="link"
                           type="text" value="{{ old('link') }}">
                    <small>{{ 'eg: https://www.facebook.com/saradoe' }}</small>
                    @error('link')
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

