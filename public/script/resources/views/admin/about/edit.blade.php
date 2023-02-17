@extends('layouts.backend.app',[
	'title' => 'Edit About',
	'pageTitle' => 'Edit About',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('about.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('about.update',$about->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                           type="text" value="{{ $about->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text"
                           value="{{ $about->name }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                              id="description">{{ $about->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input class="form-control @error('city') is-invalid @enderror" name="city" id="city" type="text"
                           value="{{ $about->city }}">
                    @error('city')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="experience_year">City</label>
                    <input class="form-control @error('experience_year') is-invalid @enderror" name="experience_year"
                           id="experience_year" type="number"
                           value="{{ $about->experience_year }}">
                    @error('experience_year')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="freelance">Freelance</label>
                    <select class="form-control @error('freelance') is-invalid @enderror" name="freelance"
                            id="freelance"
                            type="text">
                        <option value="">Freelance Availability</option>
                        <option @if ($about->freelance === 'Available') selected @endif value="Available">Available
                        </option>
                        <option @if ($about->freelance === 'Not Available') selected @endif value="Not Available">Not
                            Available
                        </option>
                    </select>
                    @error('freelance')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                           type="text" value="{{ $about->address }}">
                    @error('role')
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
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <small>Image dimensions should be 470 x 600</small>
                </div>
                <div class="form-group">
                    <img width="300" class="img-thumbnail" src="{{ asset('uploads/image/about/' . $about->image) }}"
                         alt="About image">
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

