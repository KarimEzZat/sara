@extends('layouts.backend.app',[
    'title' => 'Manage Testimonials',
    'pageTitle' => 'Manage Testimonials',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-footer py-3">
            <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Review</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td>
                                <img src="{{ asset('uploads/image/testimonial/' . $testimonial->image) }}" width="70"
                                     alt="Testimonialtestimonial Image">
                            </td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ Str::limit($testimonial->review, 50) }}</td>
                            <td>
                                <div class="row mx-auto">
                                    <a href="{{ route('testimonials.edit',$testimonial->id) }}"
                                       class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                    <form method="POST" action="{{ route('testimonials.destroy',$testimonial->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete Review ?')"
                                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
