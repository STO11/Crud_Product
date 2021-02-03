<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = 'tb_categoria_produto';

    protected $primaryKey = 'id_categoria_planejamento';

    protected $fillable = ['nome_categoria'];

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto', 'id_categoria_produto', 'id_categoria_planejamento');
    }
}
