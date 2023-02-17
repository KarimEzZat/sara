@extends('layouts.backend.app',[
	'title' => 'Edit Skill',
	'pageTitle' => 'Edit Skill',
])
@section('content')
    @include('layouts.components.datatables')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('skill.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('skill.update',$skill->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="skill">Skil</label>
                    <input required value="{{ $skill->skill }}"
                           class="form-control @error('skill') is-invalid @enderror" type="text" name="skill"
                           id="skill">
                    @error('skill')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="percent">Percent</label>
                    <input required value="{{ $skill->percent }}"
                           class="form-control @error('percent') is-invalid @enderror" type="number" name="percent"
                           id="percent">
                    @error('percent')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
@stop
