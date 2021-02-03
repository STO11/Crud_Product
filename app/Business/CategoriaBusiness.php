<?php

namespace App\Business;

use App\Models\Categoria;

class CategoriaBusiness
{

    public static function store($request)
    {
        $input = $request->all();
        $categoria = Categoria::create($input);
        if (!$categoria)
            return false;
        return $categoria->id_categoria_planejamento;
    }

    public static function update($request, $id)
    {
        $input = $request->except('_token');
        $categoria = Categoria::find($id);
        if ($categoria->update($input))
            return $categoria->id_categoria_planejamento;
        return false;
       
    }

    public static function destroy($id)
    {
        $categoria = Categoria::find($id);
        if ($categoria) {
            if ($categoria->produtos->count())
                return false;
            if ($categoria->delete())
                return true;
        }
        return false;
    }
}
