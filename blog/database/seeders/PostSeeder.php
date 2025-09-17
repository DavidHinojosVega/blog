<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('posts')->insert([
            "title" => "como cuidar las plantas",
            "description" => "es una descripcion de nuestro post",
            'img' => 'defauld2.jpg',
            'content'=> 'contenido del post',
            'likes' => 0,
            'slug' => 'como-generar-suculentas',
            'user_id' => 1,
            'categoria_id' => 1,
            'created_at' =>date('Y-m-d h:m:s')
        ]);
    DB::table('posts')->insert([
            "title" => "plantas",
            "description" => "posfaksdfkasdjaksjdkas ajksdjaksdj",
            'img' => 'defauld3.jpg',
            'content'=> 'calskdlaskdlaksdlakdlak',
            'likes' => 0,
            'slug' => 'aksldkalsdka',
            'user_id' => 2,
            'categoria_id' => 2,
            'created_at' =>date('Y-m-d h:m:s')
        ]);
    }
}
