<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Warranty</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-info-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control" name="warranty" id="warranty">
            @if(Session::has('warranty'))
                <option value="{{ session('warranty') }}">{{ session('warranty') }}</option>
            @endif
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">Quantity</label>
            <input type="number" id="quantity" class="form-control"
                   placeholder="Quantity" name="quantity"   value="{{ session('quantity') ?? 1 }}"
                   data-validation-required-message="This field is required">
        </div>
    </div>
</div>


