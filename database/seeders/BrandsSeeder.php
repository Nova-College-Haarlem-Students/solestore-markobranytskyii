<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Nike',
                'country' => 'Verenigde Staten',
                'description' => 'Opgericht in 1964, bekend van de Air Max en de Air Force 1.',
            ],
            [
                'name' => 'Adidas',
                'country' => 'Duitsland',
                'description' => 'Het merk met de drie strepen, met klassiekers als de Samba en Superstar.',
            ],
            [
                'name' => 'New Balance',
                'country' => 'Verenigde Staten',
                'description' => 'Comfort en kwaliteit, deels nog gemaakt in de VS en het VK.',
            ],
            [
                'name' => 'Asics',
                'country' => 'Japan',
                'description' => 'Japanse hardloopexpertise, populair met de Gel-serie.',
            ],
            [
                'name' => 'Veja',
                'country' => 'Frankrijk',
                'description' => null, // mag leeg, want description is nullable()
            ],
            ['name' => 'Puma', 'country' => 'Duitsland', 'description' => 'Duits sportmerk opgericht in 1948.'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
