<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Business\CategoriaBusiness;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaTest extends TestCase
{
    /**
     * Created categoria register.
     *
     * @return void
     */
    public function test_create_categoria()
    {
        $request = new Request();
        $request['nome_categoria'] = 'Teste Store Categoria';
        $categoriaId = CategoriaBusiness::store($request);
        $this->assertTrue(($categoriaId) ? true : false);
    }

    /**
     * Updated categoria register
     *
     * @return void
     */
    public function test_update_categoria()
    {
        $lastCategoria = Categoria::latest('created_at')->first();
        $request = new Request();
        $request['nome_categoria'] = 'Teste Store Categoria 2';
        $categoriaId = CategoriaBusiness::update($request, $lastCategoria->id_categoria_planejamento);
        $this->assertTrue(($categoriaId) ? true : false);
    }

    /**
     * Deleted categoria register
     *
     * @return void
     */
    public function test_delete_categoria()
    {
        $lastCategoria = Categoria::latest('created_at')->first();
        $categoria = CategoriaBusiness::destroy($lastCategoria->id_categoria_planejamento);
        $this->assertTrue($categoria);
    }
}
