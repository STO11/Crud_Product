<?php

namespace App\Http\Controllers\Controle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use \Illuminate\Support\MessageBag;

use App\Business\CategoriaBusiness;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['categorias'];
        $categorias = Categoria::orderBy('id_categoria_planejamento', 'desc')->get();
        return view('controle.categoria.index', compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('controle.categoria.edit', compact($data));
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
                'nome_categoria' => 'required'
            ]);
            $created = CategoriaBusiness::store($request);
            if (!$created)
                return redirect()->back()->with('msg', 'Não foi possível salvar os dados')->with('error', true)->withInput();
            return redirect()->route('controle.categoria.index')->with('msg', 'Cadastro realizado com sucesso!')->with('error', false);
        } catch (\Exception $e) {
            return redirect()->back()->with('msg', 'Não foi possível salvar os dados')->with('error', true)->withInput();
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
        $data = ['categoria'];
        $categoria = Categoria::find($id);
        return view('controle.categoria.show', compact($data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ['categoria'];
        $categoria = Categoria::find($id);
        return view('controle.categoria.edit', compact($data));
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
                'nome_categoria' => 'required'
            ]);
            $updated = CategoriaBusiness::update($request, $id);
            if ($updated)
                return redirect()->route('controle.categoria.index')->with('msg', 'Categoria atualizada com sucesso!')->with('error', false);
            return redirect()->back()->with('msg', 'Não foi possível atualizar os dados')->with('error', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('msg', 'Não foi possível atualizar os dados')->with('error', true);
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
            $deleted = CategoriaBusiness::destroy($id);
            if ($deleted)
                return redirect()->route('controle.categoria.index')->with('msg', 'Categoria deletada com sucesso!')->with('error', false);
            return redirect()->route('controle.categoria.index')->with('msg', 'Não foi possível deletar os dados')->with('error', true);
        } catch (\Exception $e) {
            return redirect()->route('controle.categoria.index')->with('msg', 'Não foi possível deletar os dados')->with('error', true);
        }
    }
}
