<?php

namespace App;
use App\Telefone;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //usado para criar em massa
    protected $fillable = [
        'nome', 'email', 'endereco',
    ];
    
    //criando o relacionamento 1 paera n
    public function telefones()
    {
        return $this->hasMany('App\Telefone');
    }

    //metodo para adicionar telefones
    public function addTelefone(Telefone $tel)
    {
        return $this->telefones()->save($tel);
    }

    //deletando os telefones
    public function deletarTelefone(){
        
        foreach($this->telefones as $tel){
            $tel->delete();
        }
        return true;
    }
}
