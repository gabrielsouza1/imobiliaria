<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
    <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0')}}" >
</head>
<body>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../pages/dashboards/dashboard.html">
          <img src=".{{('assets/img/brand/blue.png')}}" class="navbar-brand-img">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse show" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../pages/dashboards/dashboard.html" class="nav-link">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="../pages/dashboards/alternative.html" class="nav-link">Alternative</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Proprietario</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('proprietario.create')}}" class="nav-link">Cadastro de Proprietario</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('proprietario.index')}}" class="nav-link">Lista de Proprietario</a>
                  </li>
                                    <li class="nav-item">
                    <a href="{{ route('proprietario.relatorio')}}" class="nav-link">Relatorio</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Inquilinos</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../pages/components/buttons.html" class="nav-link">Cadastro de Inquilino</a>
                  </li>
                  <li class="nav-item">
                    <a href="../pages/components/cards.html" class="nav-link">Lista de Inquilino</a>
                  </li>
                  <li class="nav-item">
                    <a href="../pages/components/grid.html" class="nav-link">Relatorio de Inquilino</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Imóveis</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="imoveis/elements.html" class="nav-link">Cadastrar Imoveis</a>
                  </li>
                  <li class="nav-item">
                    <a href="imoveis/components.html" class="nav-link">Lista de Imoveis</a>
                  </li>
                  <li class="nav-item">
                    <a href="imoveis/validation.html" class="nav-link">Relatorio</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Contratos</span>
              </a>
              <div class="collapse" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../pages/tables/tables.html" class="nav-link">Tables</a>
                  </li>
                  <li class="nav-item">
                    <a href="../pages/tables/sortable.html" class="nav-link">Sortable</a>
                  </li>
                  <li class="nav-item">
                    <a href="../pages/tables/datatables.html" class="nav-link">Datatables</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="ni ni-map-big text-primary"></i>
                <span class="nav-link-text">Condominio</span>
              </a>
              <div class="collapse" id="navbar-maps">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../pages/maps/google.html" class="nav-link">Google</a>
                  </li>
                  <li class="nav-item">
                    <a href="../pages/maps/vector.html" class="nav-link">Vector</a>
                  </li>
                </ul>
              </div>
            </li>
 
          </ul>
        </div>
      </div>
    </div>
  </nav>