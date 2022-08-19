<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Café Americano",
            'description' => "El café americano, refiriéndose al café típico que se bebe en los Estados Unidos, es la mezcla de agua caliente y café procesado en una cafetera con filtro de café.",
            'price' => "25",
            'image_url' => "0 ",
            'status' => "2",
            'category'=>'cafes',
        ]);
        DB::table('products')->insert([
            'name' => "Café Capuchino",
            'description' => "Esta preparada con café expreso y leche montada con vapor para darle cremosidad. Un capuchino se compone de 125 ml de leche y 25 ml de café expreso.",
            'price' => "25",
            'image_url' => "0",
            'status' => "2",
            'category'=>'cafes',

        ]);
        DB::table('products')->insert([
            'name' => "Café Moca",
            'description' => "El café mocasuele llevar un tercio de expreso y dos tercios de leche vaporizada, pero se añade una parte de chocolate, normalmente en forma de jarabe de chocolate.",
            'price' => "25",
            'image_url' => "0",
            'status' => "2",
            'category'=>'cafes',

        ]);
        DB::table('products')->insert([
            'name' => "Café Expreso",
            'description' => "Debe su término a la obtención de esta bebida a través de una cafetera expreso.​ Se caracteriza por su rápida preparación a una alta presión y por un sabor y textura más concentrados.",
            'price' => "25",
            'image_url' => "0",
            'status' => "2",
            'category'=>'cafes',

        ]);

        DB::table('products')->insert([
            'name' => "Pastel De chocolate",
            'description' => "El pastel de chocolate, tarta de chocolate o torta de chocolate, es un postre conocido internacionalmente.",
            'price' => "30",
            'image_url' => "0",
            'status' => "2",
            'category'=>'postres',

        ]);
        DB::table('products')->insert([
            'name' => "Pay De Limon",
            'description' => "Hecho con una corteza de masa quebrada, relleno de crema de limón y un esponjoso merengue en la parte superior. ",
            'price' => "30",
            'image_url' => "0",
            'status' => "2",
            'category'=>'postres',

        ]);

        DB::table('products')->insert([
            'name' => "Galleta De Coco",
            'description' => "Galletas de coco caseras, con una textura suave y un potente sabor inconfundible a coco.",
            'price' => "15",
            'image_url' => "0",
            'status' => "2",
            'category'=>'postres',

        ]);


    }
}
