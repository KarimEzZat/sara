@extends('layouts.backend.app', [
    'title' => 'Edit Testimonial',
    'pageTitle' => 'Edit Testimonial',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('testimonials.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}"
                  enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                           type="text" value="{{ $testimonial->name }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input class="form-control @error('position') is-invalid @enderror" name="position" id="position"
                           type="text" value="{{ $testimonial->position }}">
                    @error('position')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="review">Review</label>
                    <textarea class="form-control @error('review') is-invalid @enderror" name="review"
                              id="review" cols="30" rows="5">{{ $testimonial->review }}</textarea>
                    @error('review')
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
                        <small>Image dimensions (max width & max height = 250) (min width & min height = 150)</small>
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <img class="img-thumbnail" src="{{ asset('uploads/image/testimonial/' . $testimonial->image) }}"
                         alt="Review image">
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
