<?php

namespace App\Http\Controllers\Controle;

use App\Business\ProdutoBusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['produtos'];
        $produtos = Produto::orderBy('id_produto', 'desc')->with('categoria')->get();
        return view('controle.produto.index', compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['categorias'];
        $categorias = Categoria::pluck('nome_categoria', 'id_categoria_planejamento')->toArray();
        return view('controle.produto.edit', compact($data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_categoria_produto' => 'required',
                'nome_produto' => 'required',
                'valor_produto' => 'required'
            ]);
            $created = ProdutoBusiness::store($request);
            if ($created)
                return redirect()->route('controle.produto.index')->with('msg', 'Produto salvo com sucesso.')->with('error', false);
            return redirect()->back()->with('msg', 'Ocorreu um erro não operação não pode ser completada')->with('error', true)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('msg', 'Ocorreu um erro não operação não pode ser completada')->with('error', true)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ['produto'];
        $produto = Produto::find($id);
        return view('controle.produto.show', compact($data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ['produto', 'categorias'];
        $produto = Produto::find($id);
        $categorias = Categoria::pluck('nome_categoria', 'id_categoria_planejamento')->toArray();
        return view('controle.produto.edit', compact($data));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'id_categoria_produto' => 'required',
                'nome_produto' => 'required',
                'valor_produto' => 'required'
            ]);
            $updated = ProdutoBusiness::update($request, $id);
            if ($updated)
                return redirect()->route('controle.produto.index')->with('msg', 'Registro atualizado com sucesso!')->with('error', false);
            return redirect()->back()->with('msg', 'Ocorreu um erro e não pode completar a atualização.')->with('error', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('msg', 'Ocorreu um erro e não pode completar a atualização.')->with('error', true);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $deleted = ProdutoBusiness::destroy($id);
            if ($deleted)
                return redirect()->route('controle.produto.index')->with('msg', 'Produto deletado com sucesso!')->with('error', false);
        } catch (\Exception $e) {
            return redirect()->route('controle.produto.index')->with('msg', 'Não foi possível deletar os dados')->with('error', true);
        }
    }
}
