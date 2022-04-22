@extends('layouts.master')
@section('title', 'Calculator')
@section('page-style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Location Management</h4>
{{--                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">--}}
{{--                            Create--}}
{{--                        </button>--}}
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Percentage</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $key=>$val)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="name-{{$val->id}}">{{ $val->name }}</td>
                                            <td class="percentage-{{$val->id}}">{{ $val->percentage }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn_edit" data-id = {{ $val->id }}
                                                    data-toggle="modal" data-target="#edit">Edit</button>
{{--                                                <form method="post" action="{{ route('studio.destroy', $val->id) }}" class="display-inline" onsubmit="return ConfirmDelete()">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                                </form>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade text-left" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Studio</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('location.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="users-list-status">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  placeholder="Studio Name" value="{{ old('name') }}"
                                               data-validation-required-message="This field is required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn_search">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Studio</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('location.updates') }}">
                    @csrf
                    <input type="hidden" id="location_id" name="location_id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="users-list-status">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  placeholder="Location Name" value="{{ old('name') }}"
                                               data-validation-required-message="This field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="users-list-status">Percentage(%)</label>
                                        <input type="text" class="form-control" id="percentage" name="percentage"  placeholder="Percentage" value="{{ old('percentage') }}"
                                               data-validation-required-message="This field is required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn_search">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    {{-- Page js files --}}
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

        $('.btn_edit').click(function () {
            var id = $(this).attr('data-id');
            $('#location_id').val(id);
            $('#editModal #name').val($('.name-'+id).text());
            $('#editModal #percentage').val($('.percentage-'+id).text());
            $('#editModal').modal('show');
        })


    </script>
@endsection
