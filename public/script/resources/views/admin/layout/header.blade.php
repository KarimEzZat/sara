@extends('layouts.backend.app', [
    'title' => 'Header Layout',
    'pageTitle' => 'Header Layout',
])
@section('content')
    <div class="row">
        @foreach ($headers as $header)
            <div class="col-lg-6 col-md-12">
                <div class="card mb-3">
                    <div class="card-header bg-red">
                        <span class="badge bg-white">{{ $header->hero_title }}</span>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail" src="{{ asset('uploads/image/header/' . $header->image) }}"
                             alt="Header Image">

                        <div class="jumbotron mt-3 bg-red text-white">
                            <h3 class="">{{ $header->hero_title }}</h3>
                            <p class="lead">{{ $header->animated_text }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        @php
                            if ($header->is_active == 1) {
                                $checked = 'checked';
                            } else {
                                $checked = '';
                            }
                        @endphp
                        <div class="custom-control custom-switch">
                            <input type="checkbox" {{ $checked }} value="{{ $header->is_active }}"
                                   class="custom-control-input activate" data-id="{{ $header->id }}"
                                   id="{{ $header->id }}">
                            <label class="custom-control-label switch" for="{{ $header->id }}"></label>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination justify-content-center">
        {{ $headers->links() }}
    </div>
@stop

@section('js-script')
    <script type="text/javascript">
        if ($(".activate").val() == 1) {
            $(this).attr('checked', 'checked');
        }

        $(".activate").on("click", function () {
            var status = $(this).val()
            var id = $(this).data("id")

            $.ajax({
                url: '{{ route('layout.setheader') }}',
                type: 'POST',
                data: {
                    status: status,
                    id: id
                },
                success: function () {
                    document.location.href = '{{ route('layout.header') }}'
                },
            });

        });
    </script>
@stop
