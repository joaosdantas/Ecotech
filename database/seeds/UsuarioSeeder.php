<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){        
            DB::table('usuarios')->insert([
            'nome'=> Str::random(5),
            'email'=> Str::random(8).'@gmail.com',
            'telefone'=> Str::random(7),
            'senha'=> Hash::make('password'),
            'perfil'=> Str::random(3),
            //'dataDeNascimento'=> Str::random(10),
            // 'Logradouro'=> Str::random(10),
            // 'numero'=> rand(1,500),
            // 'bairro'=> Str::random(10),
            // 'cidade'=> Str::random(10),
            // 'estado'=> Str::random(10),
            // 'pais'=> Str::random(10),
            // 'cep'=> Str::random(10),
            //'dataInclusao'=> rand(1,100),
        ]);
    }
}
}
