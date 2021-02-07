<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
<a href=# class="brand-link">
    <img src="/adminlte/dist/img/alogo.png" alt="Aunclick logo" class="brand-image">
    <img src="/adminlte/dist/img/unclicklogo.png" class="brand-image-text brand-text">
    
</a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        {{-- <img src="{{ Storage::url(auth()->user()->avatar) }}" class="img-circle elevation-2" alt="User Image"> --}}
        <img src="/adminlte/dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" data-toggle="modal" data-target="#form-avatar" class="d-block">Brian Polanco</a>
          {{-- @auth
          <a href="#" data-toggle="modal" data-target="#form-avatar" class="d-block">{{auth()->user()->name}}</a>
          
          @endauth  --}}
      </div>
    </div>

    @include('partials._secciones-admin')
  


    
            
  </div>
  <!-- /.sidebar -->
</aside>