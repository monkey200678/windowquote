<table class="table zero-configuration">
    <thead>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Photo</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Ethnicity</th>
        <th>Years Active</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $key=>$val)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $val->name }}</td>
            <td>
                @if($val->photo)
                    <img src="{{ url('/') }}{{ $val->photo }}" width="100px" />
                @else
                    <img src="{{ asset('app-assets/images/portrait/small/avatar-s-12.jpg') }}"  width="100px" />
                @endif
            </td>
            <td>
                @if ($val->gender == '0')
                    <span class="text-success">Actor</span>
                @elseif($val->gender == '1')
                    <span class="text-primary">Actress</span>
                @endif
            </td>
            <td>{{ $val->date_of_birth }}</td>
            <td>{{ $val->ethnicity }}</td>
            <td>{{ $val->years_active }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary" href="{{ route('bio.show', $val->id) }}">Show</a>
                    <a class="btn btn-success" href="{{ route('bio.edit', $val->id) }}">Edit</a>
                    <a class="btn btn-warning" href="{{ route('scene.paring', $val->id) }}">Scene Pairing</a>
                </div>
                <form method="post" action="{{ route('bio.destroy', $val->id) }}" class="display-inline" onsubmit="return ConfirmDelete()">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
