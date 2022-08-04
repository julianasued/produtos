@extends('header')

@section('content')

<div class="container">
  <main>
<!--     <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://www.ideiaspara.com.br/dominios/skillemblemas/imagens/usuario.svg" alt="" width="72" height="72">
      <h2>Formulário de Cadastro</h2>
    </div>
 -->
      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações do Produto</h4>
        <form action="{{ route('produtos.store') }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
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
                <input type="preco" class="form-control" name="preco" id=""required>
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
