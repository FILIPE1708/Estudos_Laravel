<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('CategoriaTableSeeder');
    }
}

class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::create(['nome' => 'ELETRONICO']);
        Categoria::create(['nome' => 'ELETRODOMESTICO']);
        Categoria::create(['nome' => 'BRINQUEDO']);
        Categoria::create(['nome' => 'ESPORTE']);
    }
}
