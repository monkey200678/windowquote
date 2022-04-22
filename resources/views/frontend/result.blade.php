@extends('layouts.frontend-master')
@section('title', 'Home')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <div class="card-header" style="justify-content: center !important;">
                        <h4 class="card-title text-uppercase logo-color home-heading" style="text-shadow: none;">Congratulations</h4>
                    </div>
                    <form action = "{{ route('front.add-more' ) }}" method="post">
                        @csrf
                        <input type="hidden" name="quantity" value="{{ $quantity }}">
                        <input type="hidden" name="calc_type" value="{{ $calc_type }}">
                        <input type="hidden" name="total_price" value="{{ $total_price }}">
                        <input type="hidden" name="width" value="{{ $width }}">
                        <input type="hidden" name="height" value="{{ $height }}">
                        <input type="hidden" name="outside_color" value="{{ $outside_color }}">
                        <input type="hidden" name="inside_color" value="{{ $inside_color }}">
                        <input type="hidden" name="thickness" value="{{ $thickness }}">
                        <input type="hidden" name="warranty" value="{{ $warranty }}">
                        <input type="hidden" name="privacy_panel" value="{{ $privacy_panel }}">
                        <input type="hidden" name="top_pattern" value="{{ isset($top_pattern) ? $top_pattern : '' }}">
                        <input type="hidden" name="center_pattern" value="{{ isset($center_pattern) ? $center_pattern : '' }}">
                        <input type="hidden" name="bottom_pattern" value="{{ isset($bottom_pattern) ? $bottom_pattern : '' }}">
                        

                        <div class="card-content">
                            <div class="card-body text-center">
                                <h4 class="text-primary mb-2 line-height-1-5">Your custom made, professionally delivered boxes will be:</h4>
                                @if(\Illuminate\Support\Facades\Session::has('calcList'))
                                    <div class="calcList container">
                                        @foreach($calcList as $val)
                                            <div class="row no-gutters justify-content-center">
                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->quantity }}</p>
                                                    </div>

                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow"><span class="text-uppercase">{{ $val->calc_type }}</span></p>
                                                    </div>

                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->width }} x {{ $val->height }}</p>
                                                    </div>
                                                
                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->outside_color }}</p>
                                                    </div>

                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->inside_color }}</p>
                                                    </div>

                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->thickness }}</p>
                                                    </div>

                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->warranty }}</p>
                                                    </div>

                                                    @if(isset($val->privacy_panel))
                                                        <div class="col-md-1 col-3">
                                                            <p class="text-yellow">{{ $val->privacy_panel }}</p>
                                                        </div>
                                                    @endif

                                                    @if(isset($val->center_pattern))
                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->center_pattern }}</p>
                                                    </div>
                                                    @endif

                                                    @if(isset($val->top_pattern))    
                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->top_pattern }}</p>
                                                    </div>
                                                    @endif

                                                    @if(isset($val->bottom_pattern))
                                                    <div class="col-md-1 col-3">
                                                        <p class="text-yellow">{{ $val->bottom_pattern }}</p>
                                                    </div>
                                                    @endif

                                                    <div class="col-md-1 col-6">
                                                        <p class="text-yellow">{{ number_format($val->total_price,2) }}</p>
                                                    </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="calcList container">
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                <h3 class="text-success">Total Price</h3>
                                            </div>
                                            <div class="col-md-4 col-3">

                                            </div>
                                            <div class="col-md-4 col-3">
                                                <h3 class="text-success">{{ number_format($sum, 2) }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="calcList">
                                        <div class="row no-gutters justify-content-center">
                                            
                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $quantity }}</p>
                                                </div>

                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow"><span class="text-uppercase">{{ $calc_type }}</span></p>
                                                </div>

                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $width }} x {{ $height }}</p>
                                                </div>
                                            
                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $outside_color }}</p>
                                                </div>

                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $inside_color }}</p>
                                                </div>

                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $thickness }}</p>
                                                </div>

                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $warranty }}</p>
                                                </div>

                                                <div class="col-md-1 col-3">
                                                    <p class="text-yellow">{{ $privacy_panel }}</p>
                                                </div>
                                                
                                                @if (isset($pattern))
                                                <div class="col-md-3 col-3">
                                                    <p class="text-yellow">{{ $pattern }}</p>
                                                </div>
                                                
                                                @else
                                                    @if(isset($center_pattern))
                                                        <div class="col-md-1 col-3">
                                                            <p class="text-yellow">{{ $center_pattern }}</p>
                                                        </div>
                                                        @if (isset($top_pattern))
                                                        <div class="col-md-1 col-3">
                                                            <p class="text-yellow">{{ $top_pattern }}</p>
                                                        </div>
                                                        @endif
                                                        @if (isset($bottom_pattern))
                                                        <div class="col-md-1 col-3">
                                                            <p class="text-yellow">{{ $bottom_pattern }}</p>
                                                        </div>
                                                        @endif
                                                    @else
                                                        @if (isset($top_pattern))
                                                        <div class="col-md-2 col-3">
                                                            <p class="text-yellow">{{ $top_pattern }}</p>
                                                        </div>
                                                        @endif
                                                        @if (isset($bottom_pattern))
                                                        <div class="col-md-1 col-3">
                                                            <p class="text-yellow">{{ $bottom_pattern }}</p>
                                                        </div>
                                                        @endif
                                                    @endif
                                                @endif
                                                <div class="col-md-1 col-6">
                                                    <p class="text-yellow">{{ number_format($total_price,2) }}</p>
                                                </div>
                                        </div>
                                    </div>
                                @endif

                                <h4 class="text-primary mt-2">This includes material, labor, taxes etc etc etc </h4>
                                <div class="form-group row justify-content-center mt-5 gap-30">
                                    <a href="{{ route('front.main-calc', $initialize = 1) }}" class="btn btn-warning btn-yellow">Start Over</a>
                                    <button type="submit" class="btn btn-warning btn-yellow">Add More</button>
                                    <a href="{{ route('front.checkout') }}" class="btn btn-warning btn-yellow">Check Out</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')

@endsection
