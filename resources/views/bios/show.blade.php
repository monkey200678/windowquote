@extends('layouts.master')
@section('title', 'Movie Management - View Profile')
@section('page-style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <section>
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">View Profile</h4>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-success" href="{{ route('bio.edit', $data->id) }}">Edit</a>
                                <a class="btn btn-warning" href="{{ route('scene.paring', $data->id) }}">Scene Pairing</a>
                                <a class="btn btn-primary" href="{{ route('bio.index', $data->id) }}">Back</a>
                            </div>

                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="users-view-image">
                                            <img src="@if($data->photo) {{ url('/') }}{{ $data->photo }}  @else {{ asset('app-assets/images/portrait/small/avatar-s-12.jpg') }} @endif" class="users-avatar-shadow rounded mb-2 pr-2 ml-1" style="width: 200px;"  alt="avatar">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td>{{ $data->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Gender</td>
                                                    <td>
                                                        @if($data->gender == 0)
                                                            <span class="text-primary">Male</span>
                                                        @else
                                                            <span class="text-danger">Female</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Birthday</td>
                                                    <td>{{ $data->date_of_birth }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Hometown</td>
                                                    <td>{{ $data->hometown }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Ethnicity</td>
                                                    <td>{{ $data->ethnicity }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Nationality</td>
                                                    <td>{{ $data->nationality }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <table class="ml-0 ml-sm-0 ml-lg-0 table border-0">
                                            <tbody>
                                                <tr>
                                                    <td class="font-weight-bold">Hair Color</td>
                                                    <td>{{ $data->hair_color }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Height</td>
                                                    <td>{{ $data->height }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Weight</td>
                                                    <td>{{ $data->weight }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Misc</td>
                                                    <td>{{ $data->misc }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Activated Years</td>
                                                    <td>{{ $data->years_active }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Filmography</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Movie Title</th>
                                            <th>Production Year</th>
                                            <th>Studio Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($actorFilmgrophy as $key=>$val)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $val->movie_title }}</td>
                                                <td>{{ $val->production_year }}</td>
                                                <td>{{ $val->studio_name }}</td>
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
    </section>
@endsection
@section('page-script')
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    {{-- Page js files --}}
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <!-- END: Page Vendor JS-->
@endsection
