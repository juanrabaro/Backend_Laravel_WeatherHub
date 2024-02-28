<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Cádiz',
            'poblacion' => 115000,
            'terreno' => 13,
            'clima' => 'warm',
            'url_imagen' => 'https://cadizturismo.com/storage/app/media/uploaded-files/p-cadiz_turismo.jpg',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Pamplona',
            'poblacion' => 200000,
            'terreno' => 25,
            'clima' => 'cold',
            'url_imagen' => 'https://navarra.okdiario.com/media/navarra/images/2022/07/13/2022071319512376624.jpg',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Jerez',
            'poblacion' => 210000,
            'terreno' => 1188,
            'clima' => 'warm',
            'url_imagen' => 'https://images.hola.com/imagenes/viajes/20201026177968/48-horas-en-jerez-de-la-frontera/0-882-189/jerez-de-la-frontera-plaza-asuncion-t.jpg?tx=w_680',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Madrid',
            'poblacion' => 3300000,
            'terreno' => 600,
            'clima' => 'cold',
            'url_imagen' => 'https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/01/24/istock-1297090032.jpeg',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Londres',
            'poblacion' => 9000000,
            'terreno' => 1500,
            'clima' => 'cold',
            'url_imagen' => 'https://www.iese.edu/es/insight/wp-content/uploads/sites/4/2022/11/Londres-Cities-in-motion-1024-alto.jpg',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Buenos Aires',
            'poblacion' => 16000000,
            'terreno' => 200,
            'clima' => 'warm',
            'url_imagen' => 'https://media.traveler.es/photos/62540d7e027033bdc5da0d1e/4:3/w_2662,h_1997,c_limit/_buenos-aires-gettyimages-743738515.jpg',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Frankfurt',
            'poblacion' => 750000,
            'terreno' => 248,
            'clima' => 'cold',
            'url_imagen' => 'https://www.germany.travel/media/redaktion/staedte_kultur_content/frankfurt/fuer_gallerydomblick_frankfurtdavid_vasicek.jpg',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Florencia',
            'poblacion' => 400000,
            'terreno' => 100,
            'clima' => 'cold',
            'url_imagen' => 'https://tourismmedia.italia.it/is/image/mitur/20210401173629-firenze-toscana-gettyimages-1145040590-1?wid=1080&hei=660&fit=constrain,1&fmt=webp',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Sevilla',
            'poblacion' => 700000,
            'terreno' => 141,
            'clima' => 'warm',
            'url_imagen' => 'https://multimedia.andalucia.org/media/0BC700DB844F4EDFBE00C1FA9B493D71/img/1112772E6D5945A1B89C26E539DD0D99/SE_Catedral_01.jpg?responsive',
        ]);
        \App\Models\Ciudades::factory()->create([
            'nombre_ciudad' => 'Málaga',
            'poblacion' => 600000,
            'terreno' => 400,
            'clima' => 'warm',
            'url_imagen' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/M%C3%A1laga_-_vistas_desde_el_Parador_de_Gibralfaro_01_%28cropped%29.jpg',
        ]);
    }
}
