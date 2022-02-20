<?php

namespace Database\Seeders;
use App\Models\Libro;

use Illuminate\Database\Seeder;

class libros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
            'id' => '1',
            'titulo' => 'Introduccion a la Investigacion de Operaciones',
            'autor' => 'Federic S. Hiller, Gerald J Lieberman ',
            'edicion' => 'Novena',
            'editorial' => 'Mc Graw Hill',
            'isbn' => '978-607-15-0308-4',
            'fe_pu' => '2020',

        ]);
        Libro::create([
            'id' => '2',
            'titulo' => 'Ingenieria del Software ',
            'autor' => 'Roger S Pressman ',
            'edicion' => 'Septima',
            'editorial' => 'Mc Graw Hill',
            'isbn' => '978-0-07-337597-7',
            'fe_pu' => '2010',
        
        ]);
        Libro::create([
            'id' => '3',
            'titulo' => 'Calculo con Geometria Analatica',
            'autor' => 'Ron Larson, Robert P. Hosteler',
            'edicion' => 'Octava',
            'editorial' => 'Mc Graw Hill',
            'isbn' => '978-970-10-5274-7',
            'fe_pu' => '2006',
        
        ]);
        Libro::create([
            'id' => '4',
            'titulo' => 'Calculo 2 de varias variables',
            'autor' => 'Ron Larson, Bruce H edwards ',
            'edicion' => 'Novena',
            'editorial' => 'Mc Graw Hill',
            'isbn' => '978-970-10-7134-2',
            'fe_pu' => '2010',
        
        ]);
        Libro::create([
            'id' => '5',
            'titulo' => 'Procesos y Fundamentos de la Investigacion Cientifica',
            'autor' => 'David Alan Neill, Liliana Cortez Suarez',
            'edicion' => 'Primera(español)',
            'editorial' => 'UTMACH',
            'isbn' => '978-9942-24-093-4',
            'fe_pu' => '2018',
        
        ]);
    }
}
