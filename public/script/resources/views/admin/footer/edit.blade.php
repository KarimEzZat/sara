@extends('layouts.backend.app',[
	'title' => 'Edit Footer',
	'pageTitle' => 'Edit Footer',
])
@section('content')
    @include('layouts.components.datatables')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('footer.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('footer.update',$footer->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="owner">Owner</label>
                    <input value="{{ $footer->owner }}" class="form-control @error('owner') is-invalid @enderror"
                           name="owner" id="owner" type="text">
                    @error('owner')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input value="{{ $footer->copyright }}"
                           class="form-control @error('copyright') is-invalid @enderror" name="copyright"
                           id="copyright" type="text">
                    @error('copyright')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input value="{{ $footer->url }}" class="form-control @error('url') is-invalid @enderror"
                           name="url" id="url" type="text">
                    @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
@stop
