@extends('layouts.backend.app',[
	'title' => 'Create Footer',
	'pageTitle' => 'Create Footer',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('footer.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('footer.store') }}">
                @csrf
                <div class="form-group">
                    <label for="owner">Owner</label>
                    <input class="form-control @error('owner') is-invalid @enderror" name="owner" id="owner" type="text"
                           value="{{ old('owner') }}">
                    @error('owner')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input class="form-control @error('copyright') is-invalid @enderror" name="copyright" id="copyright"
                           type="text" value="{{ old('copyright') }}">
                    @error('copyright')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input class="form-control @error('url') is-invalid @enderror" name="url" id="url" type="text"
                           value="{{ old('url') }}">
                    @error('url')
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
