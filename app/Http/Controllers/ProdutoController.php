<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('index', compact('produtos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $produto = new Produto;

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->descricao = $request->descricao;

        // Faz upload da imagem
        if($request->file('image')){
        $file = $request->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('public/img'), $filename);
        $produto['image'] = $filename;
        }
        $produto->save();

    // direciona para página index novamente,
    // com uma mensagem de sucesso
    return redirect()->route('produtos.index')
        ->with('mensagem', 'Cadastro salvo com sucesso.');
    }
}
