<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    protected $table='produtos';
    protected $fillable = ['nome', 'descricao', 'preco', 'categoria'];
}
