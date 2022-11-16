<?php

namespace Database\Seeders;

use App\Models\Proveedore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

use function GuzzleHttp\Promise\each;

class Proveedoreseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Proveedore::factory(1)->create();
    }
}