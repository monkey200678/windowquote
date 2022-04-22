@extends('layouts.master')
@section('title', 'Movie Management - Create Profile')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection
@section('content')
    <section>
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Profile</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <form class="form-horizontal" action="{{ route('bio.store') }}" novalidate method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url({{ asset('app-assets/images/portrait/small/avatar-s-12.jpg') }});">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-name-column">Name</label>
                                                    <input type="text" id="name" class="form-control @error('name') is-invalid  @enderror"
                                                           placeholder="Name" name="name" value="{{ old('name') }}"
                                                           data-validation-required-message="This field is required">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert" >
                                                                <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Birthday</label>
                                                    <input type="text" id="birthday" class="form-control"  value="{{ old('birthday') }}" maxlength="10"
                                                           placeholder="Birthday" name="birthday" data-inputmask-inputformat="yyyy-mm-dd"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Gender</label>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="gender" checked value="0">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">Male</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="gender" value="1">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">Female</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Hometown</label>
                                                    <input type="text" id="hometown" class="form-control"  value="{{ old('hometown') }}"
                                                           placeholder="Hometown" name="hometown"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Ethnicity</label>
                                                    <input type="text" id="ethnicity" class="form-control"  value="{{ old('ethnicity') }}"
                                                           placeholder="Hometown" name="ethnicity"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Nationality</label>
                                                    <input type="text" id="nationality" class="form-control"  value="{{ old('nationality') }}"
                                                           placeholder="Nationality" name="nationality"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Hair Color</label>
                                                    <input type="text" id="hair_color" class="form-control"  value="{{ old('hair_color') }}"
                                                           placeholder="Hair Color" name="hair_color"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Height</label>
                                                    <input type="text" id="height" class="form-control"  value="{{ old('height') }}"
                                                           placeholder="Height" name="height"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Weight</label>
                                                    <input type="text" id="weight" class="form-control"  value="{{ old('weight') }}"
                                                           placeholder="Weight" name="weight"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Misc</label>
                                                    <input type="text" id="misc" class="form-control"  value="{{ old('misc') }}"
                                                           placeholder="Misc" name="misc"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Activated Years</label>
                                                    <input type="text" id="activated_years" class="form-control"  value="{{ old('activated_years') }}"
                                                           placeholder="activated_years" name="activated_years"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Save</button>
                                            <a href="{{ route('bio.index') }}" class="btn btn-success mr-1 mb-1">Back</a>
                                        </div>
                                    </div>
                                </form>
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
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
    <script>
        $('#birthday').mask("0000-00-000", {placeholder: "____-__-__"});
        $('#activated_years').mask("0000-00-000", {placeholder: "____-__-__"});
    </script>
@endsection
