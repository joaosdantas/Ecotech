<?php

use Illuminate\Database\Seeder;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){ 
        DB::table('projetos')->insert([
            'titulo'=> Str::random(5),
            'descricao'=> Str::random(5),
            'colaboradores'=> rand(1,50),
            'captacao'=> rand(1,999),
            'parcerias'=> rand(1,999999),
            'interesses'=> Str::random(3),
            // 'usuario_id'=> rand(1,10),
            // 'locaisProjeto'=> rand(1,999999),
            // 'cidade'=> Str::random(10),
            // 'estado'=> Str::random(2),
            // 'pais'=> Str::random(5),
            // 'estado'=> Str::random(2),

        ]);
    }
}
}
