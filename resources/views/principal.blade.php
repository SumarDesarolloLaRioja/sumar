<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SIGEP v2.0">
    <meta name="author" content="Sumar La Rioja">
    <meta name="keyword" content="Sistema Sumar La Rioja Paces">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>SIGEP v2.0</title>
    <!-- Icons -->
    <link href="css/plantilla.css" rel="stylesheet">
    
    <!-- Main styles for this application -->
    
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Escritorio</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Configuraciones</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Notificaciones</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-envelope-o"></i> Mensajes
                        <span class="badge badge-success">3</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-tasks"></i> Novedades
                        <span class="badge badge-danger">2</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">admin </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
                    </li>
                    <li class="nav-title">
                        Menu
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Befeficiarios</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i> Listado de Beneficiarios</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Expedientes</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-wallet"></i> Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Historial</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Facturación</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Emitir Facturas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Emitir Comprobante</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Emitir Nota de Débito</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Utilidades</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-user"></i> Importacion de Datos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Proceso de Archivos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Administrar Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Permisos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-chart"></i> Consulta Nomenlador</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Consulta Prestaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Consulta Renaper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Informe Detalle de Facturacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Informe Resumen de Facturacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Uso de Fondos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Uso de Fondos Detalle</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.html"><i class="icon-book-open"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.html"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

        <!-- Contenido Principal -->
       @yield('contenido')
        <!-- /Fin del contenido principal -->
    </div>

    

    <footer class="app-footer">
        <span><a href="http://www.incanatoit.com/">Sumar La Rioja</a> &copy; 2020</span>
        <span class="ml-auto">Desarrollado por <a href="http://www.incanatoit.com/">Sumar</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="js/plantilla.js"></script>
    
</body>

</html>