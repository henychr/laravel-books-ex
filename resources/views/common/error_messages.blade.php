

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @if (Session::has('error_message'))
        <div class="alert alert-success">
            {{Session::get('error_message')}}
        </div>
    @endif