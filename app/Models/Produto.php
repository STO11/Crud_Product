<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    
    protected $fillable = [];

    protected $table = 'td_produto';

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria', 'id_categoria_planejamento','id_categoria_produto');
    }

}
