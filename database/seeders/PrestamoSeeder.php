<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamo::create([
            'id' => '1',
             'user_id'=>'1',
             'libro_id'=>'1',
             'expiracion'=>  date('d-m-Y h:i:s '),
             'fi'=> date('d-m-Y h:i:s '),
             'fa'=> date('d-m-Y h:i:s '),

        ]);
        Prestamo::create([
            'id' => '2',
             'user_id'=>'2',
             'libro_id'=>'2',
             'expiracion'=>  date('d-m-Y h:i:s '),
             'fi'=> date('d-m-Y h:i:s '),
             'fa'=> date('d-m-Y h:i:s '),

        ]);
        Prestamo::create([
            'id' => '3',
             'user_id'=>'3',
             'libro_id'=>'3',
             'expiracion'=>  date('d-m-Y h:i:s '),
             'fi'=> date('d-m-Y h:i:s '),
             'fa'=> date('d-m-Y h:i:s '),

        ]);
        Prestamo::create([
            'id' => '4',
             'user_id'=>'4',
             'libro_id'=>'4',
             'expiracion'=>  date('d-m-Y h:i:s '),
             'fi'=> date('d-m-Y h:i:s '),
             'fa'=> date('d-m-Y h:i:s '),

        ]);
       
    }
}
