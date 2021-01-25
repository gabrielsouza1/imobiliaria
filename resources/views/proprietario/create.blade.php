<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ url('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{ url('assets/vendor/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/quill/dist/quill.core.css')}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0')}}" type="text/css">
</head>
    <h1 class="text-center text-3xl uppercase font-black my-4">Proprietario</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <form action="{{ route('proprietario.store') }}" method="post" enctype="multipart/form-data">
        @csrf
<input type="text" name="nome" id="nome" placeholder="Nome" value="{{ $proprietario->nome ?? old('nome') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="data_nasacimento" id="data_nasacimento" placeholder="Data de Nascimento" value="{{ $proprietario->data_nasacimento ?? old('data_nasacimento') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade" value="{{ $proprietario->naturalidade?? old('naturalidade') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade" value="{{ $proprietario->nacionalidade ?? old('nacionalidade') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="file" name="foto" id="foto" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="numero" id="numero" placeholder="Numero" value="{{ $proprietario->numero ?? old('numero') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="complemento" id="complemento" placeholder="Complemento" value="{{ $proprietario->complemento ?? old('complemento') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="bairro" id="bairro" placeholder="Bairro" value="{{ $proprietario->bairro ?? old('bairro') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="cidade" id="cidade" placeholder="Cidade" value="{{ $proprietario->rua ?? old('Cidade') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="estado" id="estado" placeholder="Estado" value="{{ $proprietario->rua ?? old('estado') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="cep" id="cep" placeholder="CEP" value="{{ $proprietario->rua ?? old('cep') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="cpf" id="cpf" placeholder="CPF" value="{{ $proprietario->rua ?? old('cpf') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="rg" id="rg" placeholder="RG" value="{{ $proprietario->rua ?? old('rg') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="rg_emissor" id="rg_emissor" placeholder="RG Emissor" value="{{ $proprietario->rg_emissor ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="email" name="email" id="email" placeholder="E-mail" value="{{ $proprietario->email ?? old('email') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{ $proprietario->telefone ?? old('telefone') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="whatsapp" id="whatsapp" placeholder="WhatsApp" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="observacoes_internas" id="observacoes_internas" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="outras_observacoes" id="outras_observacoes" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="cadastradoem" id="cadastradoem" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="cadastrapor" id="cadastrapo" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="alteradoem" id="rua" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="alteradopor" id="rua" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="ativo" id="rua" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="rua" id="rua" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="rua" id="rua" placeholder="Rua" value="{{ $proprietario->rua ?? old('rua') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">

<button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Enviar</button>

        </form>
    </div>