@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>
            toastr.error( "{{ $error }}", '', { "showDuration": 500 });
        </script>
    @endforeach
@endif

@if(\Illuminate\Support\Facades\Session::has('flash_error'))
    <script>
        toastr.error( '{{\Illuminate\Support\Facades\Session::get('flash_error')}}', '', { "showDuration": 1500, positionClass: 'toast-bottom-right', "hideDuration": 98963  },);
    </script>
@endif


@if(\Illuminate\Support\Facades\Session::has('flash_success'))
    <script>
        toastr.success( '{{\Illuminate\Support\Facades\Session::get('flash_success')}}', '', { "showDuration": 500, positionClass: 'toast-bottom-right' });
    </script>
@endif
