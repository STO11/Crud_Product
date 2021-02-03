<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Produto extends Model
{
    use SoftDeletes;

    protected $fillable = ['id_categoria_produto', 'nome_produto', 'data_cadastro', 'valor_produto'];

    protected $primaryKey = 'id_produto';

    protected $appends = ['data_cadastro_formatada'];

    protected $table = 'td_produto';

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria_produto', 'id_categoria_planejamento');
    }

    public function getDataCadastroFormatadaAttribute() {
        return Carbon::CreateFromFormat('Y-m-d H:i:s', $this->attributes['data_cadastro'])->format('d/m/Y H:i:s');
    }
}
