@extends('layout.header')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Lista de proprietarios</h6>

            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{ route('proprietario.create')}}" class="btn btn-sm btn-neutral">Adicionar</a>
              <a href="#" class="btn btn-sm btn-neutral">Filtrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
        
            
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">Proprietario</h3>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip" data-original-title="Editar Usuario">
                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                <span class="btn-inner--text">Download</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              
              <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>CNPJ</th>
                <th>WhatsApp</th>
                <!--<th>Ações</th>-->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>RG</td>
                <td>CNPJ</td>
                <td>WhatsApp</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
     
      </div>
