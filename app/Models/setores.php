<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Solicitacao;

class setores extends Model
{
    use HasFactory;
    protected $table = 'setores';

    protected $fillable = ['Nome', 'Sigla'];

    public function solicitacao(){

        return $this->hasMany(Solicitacao::class);
    }
    public function setores_impressora(){

        return $this->hasMany(Setores_impressora::class);
    }
}
