@extends('layouts.backend.app',[
    'title' => 'Manage Settings',
    'pageTitle' => 'Manage Settings',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-red">
            <h5 class="text-white">General Settings</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input value="{{ $setting->logo }}" class="form-control @error('logo') is-invalid @enderror"
                           name="logo" id="logo" type="text">
                    <small>You should write the logo separated with comma & spaces between letters eg: (S A, R A)</small>
                    @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="customFile">Favicon</label>
                    <div class="custom-file">
                        <input type="file" name="favicon"
                               class="custom-file-input @error('favicon') is-invalid @enderror"
                               id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                        <small>Image dimensions should be 16 x 16</small>
                        @error('favicon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <img src="{{ asset('uploads/image/' . $setting->favicon) }}"
                         alt="Favicon">
                </div>
                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input value="{{ $setting->site_name }}"
                           class="form-control @error('site_name') is-invalid @enderror"
                           name="site_name" id="site_name" type="text">
                    @error('site_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="service_up_title">Service Up Title</label>
                    <input value="{{ $setting->service_up_title }}"
                           class="form-control @error('service_up_title') is-invalid @enderror"
                           name="service_up_title" id="service_up_title" type="text">
                    @error('service_up_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="service_main_title">Services Main Title</label>
                    <input value="{{ $setting->service_main_title }}"
                           class="form-control @error('service_main_title') is-invalid @enderror"
                           name="service_main_title" id="service_main_title" type="text">
                    @error('service_main_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="skill_title">Skill Title</label>
                    <input value="{{ $setting->skill_title }}"
                           class="form-control @error('skill_title') is-invalid @enderror"
                           name="skill_title" id="skill_title" type="text">
                    @error('skill_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="skill_description">Skill Description</label>
                    <textarea class="form-control @error('skill_description') is-invalid @enderror"
                              name="skill_description" id="skill_description" cols="30"
                              rows="3">{{ $setting->skill_description }}</textarea>
                    @error('skill_description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hire_title">Hire Me Title</label>
                    <input value="{{ $setting->hire_title }}"
                           class="form-control @error('hire_title') is-invalid @enderror"
                           name="hire_title" id="hire_title" type="text">
                    @error('hire_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contact_title">Contact Title</label>
                    <input value="{{ $setting->contact_title }}"
                           class="form-control @error('contact_title') is-invalid @enderror"
                           name="contact_title" id="contact_title" type="text">
                    @error('contact_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input value="{{ $setting->phone }}"
                           class="form-control @error('phone') is-invalid @enderror"
                           name="phone" id="phone" type="text">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input value="{{ $setting->email }}"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email" id="email" type="text">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="web_site">Website</label>
                    <input value="{{ $setting->web_site }}"
                           class="form-control @error('web_site') is-invalid @enderror"
                           name="web_site" id="web_site" type="text">
                    @error('web_site')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="customFile">Contact Image</label>
                    <div class="custom-file">
                        <input type="file" name="contact_image"
                               class="custom-file-input @error('contact_image') is-invalid @enderror"
                               id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                        <small>Image dimensions should be 285 x 480</small>
                        @error('contact_image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <img height="150" src="{{ asset('uploads/image/contact/' . $setting->contact_image) }}"
                         alt="contact image">
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
