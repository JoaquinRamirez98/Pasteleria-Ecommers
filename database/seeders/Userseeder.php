<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipousuario;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

           'Nombre'=>'Enzo',
            'email'=>'alduim90@gmail.com',
            'Password'=>bcrypt('123456789101112'),
            'Apellido'=>'Rodriguez',
            'DNI'=>'12345678',
            'Tipousuario-id'=> '1',
        
       

        ]);

        User::create([
        
            'Nombre'=>'cami',
            'email'=>'goku@gmail.com',
            'Password'=>bcrypt('0123'),
            'Apellido'=>'le gana',
            'DNI'=>'12345699',
            'Tipousuario-id'=> '2',
        
    ]);

    }
}
