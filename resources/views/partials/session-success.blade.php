@if (session('success'))

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="fas fa-check"></i> {{session('success')}}</h5>
</div>

@endif

