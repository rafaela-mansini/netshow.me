<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $fillable = [ 'nome', 'email', 'telefone', 'mensagem', 'anexo', 'enderecoIP' ];

    public static function verificarExtensaoValida($extensao){
        $extensoes_validas = [ 'pdf', 'doc', 'docx', 'odt', 'txt' ];
        return array_search($extensao, $extensoes_validas);
    }
}
