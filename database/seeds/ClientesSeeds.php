<?php

use Illuminate\Database\Seeder;



class ClientesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //vai fazer rodar a factory e a mesma vai criar os registros, no caso 10 clientese com um telefone
        factory('App\Cliente',10)->create()->each(function($u){
            $u->telefones()->save(factory('App\Telefone')->make());
        });
    }
}
