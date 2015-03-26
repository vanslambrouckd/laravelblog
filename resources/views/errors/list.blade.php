@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There was some problem with your input

        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif