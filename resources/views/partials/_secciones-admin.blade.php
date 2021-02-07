    <!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{----------------Inicio-----------------}}
        
        <li class="nav-item ">
            <a href="{{route('home.index')}}" class="nav-link {{ request()->routeIs('home.index') ? 'active' : ''}}">
                <i class="fas fa-tachometer-alt"></i>
                    <p>
                    Inicio
                    </p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="{{route('product.index')}}" class="nav-link {{ request()->routeIs('product.index') ? 'active' : ''}}">
                <i class="fas fa-box-open"></i>
                    <p>
                        Productos
                    </p>
            </a>
        </li>