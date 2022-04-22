@extends('layouts.master')
@section('title', 'Calculator')
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
                            <h4 class="card-title">Edit Calculator</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <form class="form-horizontal" action="{{ route('calc.update', $data->id) }}" novalidate method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="calc_type" value="{{ $data->calc_type }}"/>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-name-column">Total Size</label>
                                                    <input type="text" id="total_size" class="form-control"
                                                           placeholder="Total Size" name="total_size" value="{{ $data->total_size  }}"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Base Price</label>
                                                        <input type="text" id="base_price" class="form-control"
                                                               placeholder="Base Price" name="base_price" value="{{ $data->base_price  }}"
                                                               data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">OutSide Color</label>
                                                    <input type="text" id="outside_color_price" class="form-control"
                                                           placeholder="OutSide Color" name="outside_color_price" value="{{ $data->outside_color_price  }}"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Inner Color</label>
                                                    <input type="text" id="inner_color_price" class="form-control"
                                                           placeholder="InnerSide Color" name="inner_color_price" value="{{ $data->inner_color_price  }}"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Thickness Color Price</label>
                                                    <input type="text" id="thickness_color" class="form-control"
                                                           placeholder="Thickness Color Price" name="thickness_color" value="{{ $data->thickness_color_price  }}"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        @if($data->calc_type == 'dh')
                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Top Pattern Color</label>
                                                        <input type="text" id="top_pattern_color" class="form-control"
                                                               placeholder="Top Pattern Color" name="top_pattern_color" value="{{ $data->top_pattern_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Bottom Pattern Color</label>
                                                        <input type="text" id="bottom_pattern_color" class="form-control"
                                                               placeholder="Bottom Pattern Color" name="bottom_pattern_color_price" value="{{ $data->bottom_pattern_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($data->calc_type == 'badh')
                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Center Pattern</label>
                                                        <input type="text" id="center_pattern_color" class="form-control"
                                                               placeholder="Center Pattern Price" name="center_pattern_color_price" value="{{ $data->center_pattern_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Top Pattern Color</label>
                                                        <input type="text" id="top_pattern_color" class="form-control"
                                                               placeholder="Top Pattern Color" name="top_pattern_color_price" value="{{ $data->top_pattern_color_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Bottom Pattern Color</label>
                                                        <input type="text" id="bottom_pattern_color" class="form-control"
                                                               placeholder="Bottom Pattern Color" name="bottom_pattern_color_price" value="{{ $data->bottom_pattern_color_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($data->calc_type == 'bac')
                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Center Pattern</label>
                                                        <input type="text" id="center_pattern_color" class="form-control"
                                                               placeholder="Center Pattern Price" name="center_pattern_color_price" value="{{ $data->center_pattern_color_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Top Pattern Color</label>
                                                        <input type="text" id="top_pattern_color" class="form-control"
                                                               placeholder="Top Pattern Color" name="top_pattern_color_price" value="{{ $data->top_pattern_color_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="po-entry-date-column">Pattern</label>
                                                        <input type="text" id="center_pattern_color" class="form-control"
                                                               placeholder="Center Pattern Price" name="center_pattern_color_price" value="{{ $data->center_pattern_color_price  }}"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Privacy Panel Price</label>
                                                    <input type="text" id="privacy_panel_price" class="form-control"
                                                           placeholder="Privacy Panel Price" name="privacy_panel_price" value="{{ $data->privacy_panel_price  }}"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="po-entry-date-column">Extra Warranty Price</label>
                                                    <input type="text" id="extra_warranty_price" class="form-control"
                                                           placeholder="Extra Warranty Price" name="extra_warranty_price" value="{{ $data->extra_warranty_price  }}"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Update</button>
                                            <a href="{{ route('calc.index') }}" class="btn btn-success mr-1 mb-1">Back</a>
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
        $('#production_year').mask("0000", {placeholder: "____"});
    </script>
@endsection
