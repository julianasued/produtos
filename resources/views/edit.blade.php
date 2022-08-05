@extends('header')

@section('content')

<div class="col-md-12 col-lg-12">
    <h4 class="mb-3">Informações do Produto</h4>
    <form action="{{ route('produto.update', $produto->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-sm-12">
                <label for="nome" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" value="{{ $produto->nome }}" name="nome" placeholder="" value="">
                <div class="invalid-feedback">
                    Insira um nome válido.
                </div>
            </div>

            <div class="col-12">
                <label for="preco" class="form-label">Preço <span class="text-muted"></span></label>
                <input type="preco" class="form-control" value="{{ $produto->preco }}" name="preco">
                <div class="invalid-feedback">
                    Insira um preço válido.
                </div>
            </div>

            <div class="col-md-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" value="{{ $produto->descricao }}" name="descricao" id="descricao">
                <div class="invalid-feedback">
                    Descrição obrigatório.
                </div>
            </div>

            <div class="col-md-3">
                <label for="image">Imagem do Produto:</label>
                <label for="image" class="form-label">Imagem</label><br>
                <input type="file" class="form-control-file" name="image" id="image" placeholder="" required>
                <img src="{{ url('public/img/'.$produto->image) }}" style="height: 100px; width: 150px;">
                <div class="invalid-feedback">
                    Imagem obrigatório.
                </div>
            </div>

            <hr class="my-4">

            <button class="w-25 btn btn-primary btn-lg" type="submit">Salvar</button>
        </div>
    </form>
    </main>
</div>
@stop
