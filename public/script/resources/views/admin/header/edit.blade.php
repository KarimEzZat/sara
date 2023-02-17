@extends('layouts.backend.app', [
    'title' => 'Edit Header',
    'pageTitle' => 'Edit Header',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('header.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('header.update', $header->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="hero_title">Hero Title</label>
                    <input value="{{ $header->hero_title }}" class="form-control @error('hero_title') is-invalid @enderror"
                        name="hero_title" id="hero_title" type="text">
                    @error('hero_title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="animated_text">Animated Text</label>
                    <input placeholder="example : web developer,gamer" value="{{ $header->animated_text }}"
                        class="form-control @error('animated_text') is-invalid @enderror" name="animated_text"
                        id="animated_text" type="text">
                    @error('animated_text')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="customFile">Avatar Image</label>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror"
                            id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                        <small>Image dimensions should be 150 x 150</small>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <img class="img-thumbnail" src="{{ asset('uploads/image/header/' . $header->image) }}"
                        alt="avatar image">
                </div>
                <div class="form-group">
                    <label for="customFile">CV</label>
                    <div class="custom-file">
                        <input type="file" name="cv" class="custom-file-input @error('cv') is-invalid @enderror"
                            id="cv">
                        <label class="custom-file-label" for="cv">Choose File</label>
                        @error('cv')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
@stop
@section('js-script')
    @include('layouts.components.inputScript')
@stop
