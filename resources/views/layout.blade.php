<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Aunclick</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/adminlte/dist/img/favicon.png') }}">
    <!-- Estilos App -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @livewireStyles

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    {{--Se incluye el nav bar de la izquierda--}}
    @include('partials.left-nav')

    {{--Se incluye el nav bar de la a la derecha--}}
      @include('partials.right-nav')

    {{--Se incluye el sidebar--}}
      @include('partials.sidebar')

    <div id="app">
    {{--Se incluye el contenido --}}  
        @yield('content')
    </div>
    {{-- @include('sweet::alert') --}}

    <!-- Modal para cambiar el avatar -->
    {{-- @include('perfil.modals.form-avatar')  --}}
  </div>

  
  {{--Se incluye el footer--}}

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-block">
      
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2021 <a href="https://aunclick.com">Aunclick</a>.</strong> Todos los derechos reservados.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <script src="{{ asset('js/app.js') }}"></script>

  <!-- Bootstrap 4 -->
  <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="/adminlte/dist/js/adminlte.min.js"></script>
  <script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
  <!-- jQuery -->
  <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="/adminlte/dist/js/pages/dashboard3.js"></script>
  @livewireScripts
  
  </body>
</html>


