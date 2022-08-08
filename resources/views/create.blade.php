@extends('header')

@section('content')

@if($errors->any())
  <h3>Houve alguns erros ao processar o formulário</h3>
  <ul>
     @foreach($errors->all() as $error)
        <li class="alert alert-danger" role="alert">{{ $error }}</li>
     @endforeach
  </ul>
@endif

<div class="container">
  <main>

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações do Produto</h4>
        <form action="{{ route('produto.store') }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
          @csrf
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome do Produto</label>
              <input type="text" class="form-control" name="nome" id="" placeholder="" value="" required>
              <div class="invalid-feedback">
                O primeiro nome válido é obrigatório.
              </div>
            </div>

            <div class="col-md-3">
                <label for="preco" class="form-label">Preço <span class="text-muted"></span></label>
                <input type="preco" class="form-control" name="preco" maxlength="9" id="valor" onkeyup="formatarMoeda()">
                <div class="invalid-feedback">
                Insira um preço válido.
                </div>
            </div>

            <div class="col-12">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text" class="form-control" name="descricao" id="descricao"placeholder="" required>
              <div class="invalid-feedback">
              Descrição obrigatória.
              </div>
            </div>

            <div class="form-group">
              <label for="image" class="form-label">Imagem do Produto</label><br>
              <input type="file" class="form-control-file" name="image" id="image"placeholder="" required>
              <div class="invalid-feedback">
              Imagem obrigatória.
              </div>
            </div>

          </div>

          <hr class="my-4">

          <button class="w-25 btn btn-primary btn-lg" type="submit">Salvar</button>
        </div>
      </form>
      </main>
    </div>
@stop
