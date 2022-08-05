@extends('header')

@section('content')

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações do Produto</h4>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="{{ $produto->nome }}" value="" disabled="">
            </div>

            <div class="col-12">
                <label for="preco" class="form-label">Preço <span class="text-muted"></span></label>
                <input type="preco" class="form-control" name="preco" placeholder="{{ $produto->preco }}" disabled="">
            </div>

            <div class="col-md-3">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text" class="form-control" name="descricao" placeholder="{{ $produto->descricao }}" disabled="">
            </div>

            <div class="col-12">
              <label for="image" class="form-label">Imagem</label><br>
              <img src="{{ url('public/img/'.$produto->image) }}" style="height: 100px; width: 150px;">
            </div>

            <hr class="my-4">
@stop
