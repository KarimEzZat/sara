@extends('layouts.backend.app',[
	'title' => 'Create Skill',
	'pageTitle' => 'Create Skill',
])
@section('content')
    @include('layouts.components.datatables')
    @if($errors->count() > 0)
        <div class="alert alert-danger text-danger alert alert-info alert-dismissible fade show" role="alert">
            <ul class="m-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('skill.index') }}" class="btn btn-danger btn-sm">Cancel</a>
        </div>
        <div class="table-responsive">
            <form id="dynamic_form" action="{{ route('skill.index') }}" method="post">
                <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
                    <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Percent</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" align="right">&nbsp;</td>
                        <td>
                            @csrf
                            <input type="submit" name="save" id="save" class="btn btn-primary" value="Save"/>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div>
@stop

@section('js-script')
    <script>
        $(document).ready(function () {

            var count = 1;

            dynamic_field(count);

            function dynamic_field(number) {
                html = '<tr>';
                html += '<td><input type="text"  id="skill" name="skills[]" class="form-control" /></td>' +
                    '<td><input type="number" id="percent" name="percents[]" class="form-control" /></td>';
                if (number > 1) {
                    html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                    $('tbody').append(html);
                } else {
                    html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                    $('tbody').html(html);
                }
            }

            $(document).on('click', '#add', function () {
                count++;
                dynamic_field(count);
            });

            $(document).on('click', '.remove', function () {
                count--;
                $(this).closest("tr").remove();
            });
        });
    </script>
@stop
