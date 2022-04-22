<div class="col-md-6 col-12">
    <div class="form-group">
        <div class="controls">
            <label for="po-name-column">{{ $pattern }}</label>
            <div class="dropdown dropright" style="display:inline-block">
                    <a dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-info-circle fa-lg"></i></span></a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hint-1: This is going to be great!</p>
                        <p class="dropdown-item">Hint-2: This is going to be great!</p>
                    </div>
            </div>
            <select class="form-control {{ $class }}" name="{{ $value }}" id="{{ $value }}">
                <option value="0">0</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="8">8</option>
            </select>
        </div>
    </div>
</div>
