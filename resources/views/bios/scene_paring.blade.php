@extends('layouts.master')
@section('title', 'Movie Management - Scene Paring')
@section('page-style')
@endsection
@section('content')
    <section>
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">"{{ $bio_name }}" Scene Paring</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-6">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Actress</th>
                                                <th>Movie Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $actress_temp = 0; @endphp
                                            @foreach($actress_scene_parings as $actress)
                                                <tr>
                                                    <td>
                                                        {{ $actress->actor_name }}
                                                    </td>
                                                    <td>{{ $actress->movie_title }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-12 col-sm-9 col-md-6 col-lg-6">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Actors</th>
                                                <th>Movie Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($actor_scene_parings as $actor)
                                                <tr>
                                                    <td>{{ $actor->actor_name }}</td>
                                                    <td>{{ $actor->movie_title }}</td>
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
            </div>
        </section>
    </section>
@endsection
@section('page-script')
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

@endsection
