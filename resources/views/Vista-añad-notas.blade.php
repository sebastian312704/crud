<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>My acdemic planner</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/avatars/icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}""
        class="template-customizer-theme-css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>

                                </defs>

                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2"
                            style="text-transform: uppercase; font-size: 1em;">
                            <img src="../assets/img/avatars/icon.png" alt="Icono de Administrador"
                                style="vertical-align: middle; margin-right: 5px; width: 50px; height: auto;">
                            Administrador
                        </span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->

                    <!-- Layouts -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Opciones</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Registros</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('crud.index_Registrar_Profesor') }}" class="menu-link">
                                    <div data-i18n="Account">Registrar Profesor</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('crud.index_Registrar_Estudiante') }}" class="menu-link">
                                    <div data-i18n="Notifications">Registar Estudiante</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Authentications">Asignaciones</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('crud.index_Asignacion_Profesor') }}" class="menu-link">
                                    <div data-i18n="Basic">Asignar Profesor</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('crud.index_Asignacion_Estudiante') }}" class="menu-link">
                                    <div data-i18n="Basic">Asignar Estudiante</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('index_notas') }}" class="menu-link">
                                    <div data-i18n="Basic">Asignar Notas</div>
                                </a>
                            </li>

                        </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/user.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/user.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <div>

                    <!DOCTYPE html>
                    <html>

                    <head>
                        <title>Ingreso de notas dinamico</title>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <link rel="stylesheet"
                            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
                            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
                            crossorigin="anonymous">
                    </head>

                    <body>


                        <div class="container mt-5" style="background-color: #f9f9f9;">
                            <br>
                            <h1 class="text-center">
                                <strong>Ingresar Calificaciones</strong>
                            </h1>
                            <hr /><br>

                            <form action="{{ route('añad_nota') }}" method="POST">
                                <input type="hidden"
                                name="_token" value="{{csrf_token()}}">

                                <div class="row text-right">
                                    <div class="col-md-12">
                                        <button class="btn add-btn btn-info">+</button>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3">
                                        <label>Nombre Asignatura</label>
                                        <input type="text" name="nameAsignatura[]" class="form-control">
                                    </div>

                                    <div class="col-md-3">
                                        <label>Nombre Nota</label>
                                        <input type="text" name="nameNota[]" class="form-control">
                                    </div>

                                    <div class="col-md-3">
                                        <label>Calificacion</label>
                                        <input type="number" name="nmCalificacion[]" step=".01" min="0.0"
                                            max="5.0" class="form-control">
                                    </div>
                                </div>

                                <div class="newData"></div>

                                <div class="row text-center mt-5">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Registrar" />
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>


                        <script type="text/javascript">
                            $(function() {
                                var i = 1;
                                $('.add-btn').click(function(e) {
                                    e.preventDefault();
                                    i++;

                                    $('.newData').append('<div id="newRow' + i + '" class="form-row">' +
                                        '<div class="col-md-6">' +
                                            '<input type="hidden" name="nameAsignatura[]" class="form-control">' +
                                        '<label>Nombre Nota</label>' +
                                        '<input type="text" name="nameNota[]" class="form-control">' +
                                        '</div>' +
                                        '<div class="col-md-6">' +
                                        '<label>Calificacion</label>' +
                                        '<input type="number" name="nmCalificacion[]" step=".01" min="0.0" max="5.0" class="form-control">' +
                                        '</div>' +
                                        '<a href="#" class="remove-lnk" id="' + i + '">Eliminar "' + i + '"</a>' +
                                        '</div>'
                                    );
                                });


                                $(document).on('click', '.remove-lnk', function(e) {
                                    e.preventDefault();

                                    var id = $(this).attr("id");
                                    $('#newRow' + id + '').remove();
                                });

                            });
                        </script>
                    </body>

                    </html>  


                </div>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
