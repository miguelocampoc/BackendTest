<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        User::create([
            'name' => 'Victor Arana Flores',
            'email' => 'victor@codersfree.com',
            'password' => bcrypt('12345678')
        ]);
        */
        User::create([
            'name' => 'Miguel Angel',
            'apellidos' => 'Ocampo Chavarro',
            'email' =>'miguelocampoc@gmail.com',
            'cedula' => '123456789',
            'contacto' => '3172132023',
            'direccion' => 'CALLE 31',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Ricardo fernando',
            'apellidos' => 'Hernandez rueda',
            'email' => 'Hernandez@gmail.com',
            'cedula' => '123456789',
            'contacto' => '123456789',
            'direccion' => 'CALLE 20',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Julio Cesar',
            'apellidos' => 'Augusto',
            'email' => 'augusto@gmail.com',
            'cedula' => '123456789',
            'contacto' => '123456789',
            'direccion' => 'CALLE 18',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Sergio Ricardo',
            'apellidos' => 'Gonzales',
            'email' => 'gonzales@gmail.com',
            'cedula' => '123456789',
            'contacto' => '123456789',
            'direccion' => 'CALLE 12',
            'password' => bcrypt('12345678')
        ]);
    }
}
