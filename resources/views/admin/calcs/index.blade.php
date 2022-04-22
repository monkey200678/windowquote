@extends('layouts.master')
@section('title', 'Calculator')
@section('page-style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Filters</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                    <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content collapse show">
            <div class="card-body">
                <div class="users-list-filter">
                    <form action="{{ route('calc.index') }}">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-department">Calculation Type</label>
                                <fieldset class="form-group">
                                    <select class="form-control select2" id="calc_type" name="calc_type">
                                        @foreach($calc_types as $val)
                                            <option value="{{ $val->calc_type }}" class="text-uppercase"  @if($val->calc_type == $calc_type) selected @endif>
                                                {{ $val->calc_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <button type="submit" class="btn btn-success" style="margin-top: 20px;">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Calculator Management</h4>
                        {{--                            <a class="btn btn-success" href="{{ route('movie.create') }}">Create</a>--}}
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Total Size</th>
                                        <th>Base Price</th>
                                        <th>Outside Color</th>
                                        <th>Inner Color</th>
                                        <th>Thickness</th>
                                        @if($calc_type == 'dh')
                                            <th>Top Pattern</th>
                                            <th>Bottom Pattern</th>
                                        @elseif($calc_type == 'badh')
                                            <th>Center Pattern</th>
                                            <th>Top Pattern</th>
                                            <th>Bottom Pattern</th>
                                        @elseif($calc_type == 'bac')
                                            <th>Center Pattern</th>
                                            <th>Side Pattern</th>
                                        @else
                                            <th>Pattern</th>
                                        @endif
                                        <th>Privacy Panel</th>
                                        <th>Extra Warranty</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $key => $val)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $val->total_size }}</td>
                                            <td>{{ $val->base_price }}</td>
                                            <td>{{ $val->outside_color_price }}</td>
                                            <td>{{ $val->inner_color_price }}</td>
                                            <td>{{ $val->thickness_color_price }}</td>

                                            @if($calc_type == 'dh')
                                                <td>{{ $val->top_pattern_price }}</td>
                                                <td>{{ $val->bottom_pattern_price }}</td>
                                            @elseif($calc_type == 'badh')
                                                <td>{{ $val->center_pattern_price }}</td>
                                                <td>{{ $val->top_pattern_price }}</td>
                                                <td>{{ $val->bottom_pattern_price }}</td>
                                            @elseif($calc_type == 'bac')
                                                <td>{{ $val->center_pattern_price }}</td>
                                                <td>{{ $val->top_pattern_price }}</td>
                                            @else
                                                <td>{{ $val->center_pattern_price }}</td>
                                            @endif

                                            <td>{{ $val->privacy_panel_price }}</td>
                                            <td>{{ $val->extra_warranty_price }}</td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('calc.edit', $val->id) }}">Edit</a>
                                                {{--                                                    <form method="post" action="{{ route('movie.destroy', $val->id) }}" class="display-inline" onsubmit="return ConfirmDelete()">--}}
                                                {{--                                                        @csrf--}}
                                                {{--                                                        @method('delete')--}}
                                                {{--                                                        <button type="submit" class="btn btn-danger">Delete</button>--}}
                                                {{--                                                    </form>--}}
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
@endsection
@section('page-script')
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    {{-- Page js files --}}
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection
