@extends('header')

@section('content')

@if($errors->any())
  <h3>Houve alguns erros ao processar o formulário</h3>
  <ul>
     @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
  </ul>
@endif

<div class="col-md-12 col-lg-12">
    <h4 class="mb-3">Informações do Produto</h4>
    <form action="{{ route('produto.update', $produto->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="nome" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" value="{{ $produto->nome }}" name="nome" placeholder="" value="">
            </div>

            <div class="col-3">
                <label for="preco" class="form-label">Preço <span class="text-muted"></span></label>
                <input type="preco" class="form-control" value="{{ $produto->preco }}" name="preco" maxlength="9" id="valor" onkeyup="formatarMoeda()">
            </div>

            <div class="col-md-6">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" maxlength="55" value="{{ $produto->descricao }}" name="descricao" id="descricao">
            </div>

            <div class="col-md-3">
                <label for="image">Imagem do Produto:</label>
                <label for="image" class="form-label">Imagem</label><br>
                <input type="file" class="form-control-file" name="image" id="image" placeholder="">
            </div>

            <hr class="my-4">

            <button class="w-25 btn btn-primary btn-lg" type="submit">Salvar</button>
        </div>
    </form>
    </main>
</div>
@stop
