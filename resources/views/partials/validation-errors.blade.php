@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="fas fa-exclamation-triangle"></i> Hay un error con algun campo:</h5>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
        </ul>
    </div> 
@endif

