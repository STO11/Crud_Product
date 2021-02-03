<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Business\ProdutoBusiness;
use App\Business\CategoriaBusiness;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutoTest extends TestCase
{
    /**
     * Created product register
     *
     * @return void
     */
    public function test_create_produto()
    {
        $request = new Request();
        $request['nome_categoria'] = 'Categoria produto 1';
        $categoriaId = CategoriaBusiness::store($request);

        $request = new Request();
        $request['id_categoria_produto'] = $categoriaId;
        $request['nome_produto'] = 'Produto teste';
        $request['data_cadastro'] = date('Y-m-d H:i:s');
        $request['valor_produto'] = 2134.45;

        $produtoId = ProdutoBusiness::store($request);
        $this->assertTrue(($produtoId) ? true : false);
    }

    /**
     * Updated product register
     *
     * @return void
     */
    public function test_update_produto()
    {
        $lastProduto = Produto::latest('created_at')->first();
        $request = new Request();
        $request['nome_produto'] = 'Produto teste 2';
        $request['data_cadastro'] = date('Y-m-d H:i:s');
        $request['valor_produto'] = 4134.45;
        $produtoId = ProdutoBusiness::update($request, $lastProduto->id_produto);
        $this->assertTrue(($produtoId) ? true : false);
    }

     /**
     * Deleted product register
     *
     * @return void
     */
    public function test_delete_produto()
    {
        $lastProduto = Produto::latest('created_at')->first();
        $produtoId = ProdutoBusiness::destroy($lastProduto->id_produto);
        $lastCategoria = Categoria::latest('created_at')->first();
        $categoria = CategoriaBusiness::destroy($lastCategoria->id_categoria_planejamento);
        $this->assertTrue(($produtoId) ? true : false);
    }
}
