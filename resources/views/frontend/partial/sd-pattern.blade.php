<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Width(size)</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control {{ $class }}" name="width" id="width">
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="12">12</option>
            </select>
        </div>
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Height (Size)</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-info-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <input type="text" id="height" class="form-control"
                   placeholder="Height" name="height" value= '79'
                   data-validation-required-message="This field is required" readonly>
        </div>
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Color (Outside)</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-question-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control" name="outside_color" id="outside_color">
            @if(Session::has('outside_color'))
                <option value="{{ session('outside_color') }}" selected>{{ session('outside_color') }}</option>
            @endif
                <option value="white">White</option>
                <option value="beige">Beige</option>
                <option value="black">Black</option>
            </select>
        </div>
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Color (Inside)</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-question-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control" name="inside_color" id="inside_color">
                @if(Session::has('inside_color'))
                    <option value="{{ session('inside_color') }}" selected>{{ session('inside_color') }}</option>
                @endif
                <option value="white">White</option>
                <option value="beige">Beige</option>
            </select>
        </div>
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Glass Pack</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-question-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control" name="thickness" id="thickness">
            @if(Session::has('thickness'))
                <option value="{{ Session('thickness') }}">{{ Session('thickness') }}</option>
            @endif
                <option value="eSTAR2">eSTAR2</option>
                <option value="eSTAR3">eSTAR3</option>
            </select>
        </div>
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Foam Filled Frames</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-question-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control" name="privacy_panel" id="privacy_panel">
            @if(Session::has('privacy_panel'))
                <option value="{{ Session('privacy_panel') }}">{{ Session('privacy_panel') }}</option>
            @endif
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
        </div>
    </div>
</div>