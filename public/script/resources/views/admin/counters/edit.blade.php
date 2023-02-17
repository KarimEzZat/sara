@extends('layouts.backend.app',[
	'title' => 'Edit Counter',
	'pageTitle' => 'Edit Counter',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('counters.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('counters.update', $counter->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                           type="text" value="{{ $counter->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="number" class="form-control @error('number') is-invalid @enderror" name="number"
                           id="number" value="{{ $counter->number }}">
                    @error('number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon"
                           id="icon" value="{{ $counter->icon }}">
                    <small>
                        eg: (im im-smiley-o or fa fa-facebook) visit
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
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js-script')
    @include('layouts.components.inputScript')
@stop

