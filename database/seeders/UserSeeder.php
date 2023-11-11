<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'id' => 1,
            'nombre' => 'miller',
            'cedula' => '1007750963',
            'numero' => '3123404060',
            'direccion' => 'cra 2 #14-57'
        ]);

        User::insert([
            'id' => 2,
            'nombre' => 'efren',
            'cedula' => '9871231235',
            'numero' => '3132637040',
            'direccion' => 'calle 4 #12-18'
        ]);
    }
}
