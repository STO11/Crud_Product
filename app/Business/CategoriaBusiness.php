<?php

namespace App\Business;

use App\Models\Categoria;

class CategoriaBusiness
{

    public static function store($request)
    {
        $input = $request->all();
        $categorias = Categoria::create($input);
        if (!$categorias)
            return false;
        return true;
    }

    public static function update($request, $id)
    {
        $input = $request->except('_token');
        $categoria = Categoria::find($id)->update($input);
        if ($categoria)
            return true;
        return false;
    }

    public static function destroy($id)
    {
        $categoria = Categoria::find($id);
        if ($categoria->delete())
            return true;
        return false;
    }
}
