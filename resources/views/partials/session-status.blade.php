@if (session('status'))

    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="fas fa-times"></i> {{session('status')}}</h5>
    </div>

@endif