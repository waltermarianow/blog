<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $curso = new Curso();
        $curso->name = "Laravel";
        $curso->description = "El mejor framework de PHP";
        $curso->categoria = "Desarrollo web";
        $curso->save();*/

        Curso::factory(50)->create();
    }
}
