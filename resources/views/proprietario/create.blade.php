
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Cadastro de Inquilino</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cadastro de Inquilino</li>
                  @if(Session::get('sucess'))
      <div class="alert alert-sucess">
           {{ Session::get('sucess')}}
      </div>
@endif
@if(Session::get('fail'))
      <div class="alert alert-danger">
           {{ Session::get('fail')}}
      </div>
@endif
                </ol>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0">Cadastro de Inquilino</h3>
              </div>
              <div class="card-body">
                <form action="insert" method="post">
                @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input class="form-control" placeholder="Nome Completo" type="text" name="nome" value="{{ old('nome')}}" >
                          <span style="color">@error('nome') {{$message }} @enderror</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input class="form-control" placeholder="E-mail" type="email" name="email" value="{{ old('email')}}">
                          <span style="color">@error('email') {{$message }} @enderror</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Endereço" type="text" name="endereco" value="{{ old('endereco')}}">
                          <span style="color">@error('endereco') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Complemento" type="text" name="complemento" value="{{ old('complemento')}}">
                          <span style="color">@error('complemento') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-eye"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                          </div>
                          <input class="form-control" placeholder="Bairro" type="text" name="bairro" value="{{ old('bairro')}}">
                          <span style="color">@error('bairro') {{$message }} @enderror</span>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control" placeholder="Cidade" type="text" name="cidade" value="{{ old('cidade')}}">
                          <span style="color">@error('cidade') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                                        <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control" placeholder="Telefone" type="text" name="telefone" value="{{ old('telefone')}}">
                          <span style="color">@error('telefone') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                                        <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                        <input class="form-control" placeholder="WhatsApp" type="text" name="whatsapp" value="{{ old('whatsapp')}}">
                        <span style="color">@error('whatsapp') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                                        <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control" placeholder="CPF" type="text" name="cpf"  value="{{ old('cpf')}}">
                          <span style="color">@error('cpf') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                                        <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control" placeholder="CNPJ" type="text" name="cnpj" value="{{ old('cnpj')}}">
                          <span style="color">@error('cnpj') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                                        <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control" placeholder="RG" type="text" name="rg" value="{{ old('rg')}}">
                          <span style="color">@error('rg') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                                        <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                          </div>
                          <input class="form-control datepicker" placeholder="Dats Nascimento" type="text" value="06/20/2018" name="data_nascimento" value="{{ old('data_nascimento')}}">>
                          <span style="color">@error('data_nascimento') {{$message }} @enderror</span>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <button type="submit">Entrar</butotn>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
