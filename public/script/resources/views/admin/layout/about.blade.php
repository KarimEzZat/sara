@extends('layouts.backend.app', [
    'title' => 'About Layout',
    'pageTitle' => 'About Layout',
])
@section('content')
    <div class="row">
        @foreach ($abouts as $about)
            <div class="col-lg-6 col-md-12 mb-2">
                <div class="card mb-3">
                   <div class="card-header bg-red text-white">{{ $about->name }}</div>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="p-3">
                                    <img src="{{ asset('uploads/image/about/' . $about->image) }}"
                                         class="img-thumbnail w-50"
                                         alt="about image">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-body">

                                    @php
                                        if ($about->is_active == 1) {
                                            $checked = 'checked';
                                        } else {
                                            $checked = '';
                                        }
                                    @endphp
                                    <div class="custom-control custom-switch float-right">
                                        <input type="checkbox" <?= $checked ?> value="{{ $about->is_active }}"
                                               class="custom-control-input activate" data-id="{{ $about->id }}"
                                               id="{{ $about->id }}">
                                        <label class="custom-control-label switch" for="{{ $about->id }}"></label>
                                    </div>

                                    <h5 class="card-title mt-4">{!! $about->title !!}</h5>
                                    <hr>
                                    <p class="card-text"><span class="badge badge-red">{{ $about->name }}</span>
                                        , {{ $about->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination justify-content-center">
        {{ $abouts->links() }}
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
                url: '{{ route('layout.setabout') }}',
                type: 'POST',
                data: {
                    status: status,
                    id: id
                },
                success: function () {
                    document.location.href = '{{ route('layout.about') }}'
                },
            });

        });
    </script>
@stop
