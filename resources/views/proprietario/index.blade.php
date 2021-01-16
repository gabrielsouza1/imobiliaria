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
                <th>Data de Nascimento</th>
                <th>Naturidade</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-user">
                  <img src="{{('assets/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">Masculino</span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold">10/09/1990</a>
                </td>
                <td>
                  <span class="text-muted">São Paulo</span>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Editar usuario">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Deletar usuario">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="table-user">
                  <img src="{{('assets/img/theme/team-2.jpg')}}" class="avatar rounded-circle mr-3">
                  <b>Alex Smith</b>
                </td>
                <td>
                  <span class="text-muted">Masculino</span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold">08/09/1990</a>
                </td>
                 <td>
                  <span class="text-muted">São Paulo</span>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Editar usuario">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Deletar Usuario">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="table-user">
                  <img src="{{('assets/img/theme/team-3.jpg')}}" class="avatar rounded-circle mr-3">
                  <b>Samantha Ivy</b>
                </td>
                <td>
                  <span class="text-muted">Feminino</span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold">30/08/1978</a>
                </td>
                                <td>
                  <span class="text-muted">São Paulo</span>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Editar usuario">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Deletar Usuario">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="table-user">
                  <img src="{{('assets/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">Masculino</span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold">02/02/1995</a>
                </td>
                                <td>
                  <span class="text-muted">Brasilia</span>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Editar usuario">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Deletar Usuario">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="table-user">
                  <img src="{{('assets/img/theme/team-2.jpg')}}" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">Masculino</span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                </td>
                                <td>
                  <span class="text-muted">Bahia</span>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Editar usuario">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Deletar Usuario">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
     
      </div>
