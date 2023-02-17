@extends('layouts.backend.app',[
	'title' => 'Edit Portfolio',
	'pageTitle' => 'Edit Portfolio',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('works.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('works.update',$work->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                           type="text" value="{{ $work->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                            id="category_id">
                        <option value="">Choose Category</option>
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}" {{ $work->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach

                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                              id="description" cols="30" rows="5">{{ $work->description }}</textarea>
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
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <img width="50%" class="img-thumbnail" src="{{ asset('uploads/image/works/' . $work->image) }}"
                         alt="Portfolio Image">
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
