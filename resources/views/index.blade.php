@extends('header')

@section('content')

@if($status = Session::get('mensagem'))
<div class="alert alert-success" role="alert">{{ $status }}</div>
@endif

<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">

    <h3>Lista de Cadastro:</h3>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produto as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->preco }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td><img src="{{ url('public/img/'.$p->image) }}" style="height: 100px; width: 150px;"></td>
                    <td>
                        <form action="{{ route('produto.destroy', $p->id) }}" method="post">
                            <a href="{{ route('produto.show',
                  $p->id) }}" class="btn btn-info btn-sm">Detalhes</a> |
                            <a href="{{ route('produto.edit',
                  $p->id) }}" class="btn btn-warning btn-sm">Editar</a> |

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</main>

@stop
