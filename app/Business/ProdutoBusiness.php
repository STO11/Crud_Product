<?php

namespace App\Business;

use App\Models\Produto;

class ProdutoBusiness
{

    public static function store($request)
    {
        $input = $request->all();
        $input['data_cadastro'] = date('Y-m-d H:i:s');
        $input['valor_produto'] = str_replace(['.', ','], ['', '.'], $input['valor_produto']); // remove mask
        $produto = Produto::create($input);
        if (!$produto)
            return false;
        return true;
    }

    public static function update($request, $id)
    {
        $input = $request->except('_token');
        $input['valor_produto'] = str_replace(['.', ','], ['', '.'], $input['valor_produto']); // remove mask
        $produto = Produto::find($id)->update($input);
        if ($produto)
            return true;
        return false;
    }

    public static function destroy($id)
    {
        $categoria = Produto::find($id);
        if ($categoria && $categoria->delete())
            return true;
        return false;
    }
}
