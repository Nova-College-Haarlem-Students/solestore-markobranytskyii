<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Sneakers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SneakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        // Haalt de id's van de merken op, op naam
        $brands = Brand::pluck('id', 'name');

        $sneakers = [
            ['Nike', 'Air Force 1', 'Triple White', 1982, 'De klassieke basketbalschoen die een streetwear-icoon werd.'],
            ['Nike', 'Air Max 90', 'Infrared', 1990, 'Bekend om de zichtbare Air-unit in de hiel.'],
            ['Nike', 'Air Jordan 1', 'Chicago', 1985, 'De eerste signature-schoen van Michael Jordan.'],
            ['Adidas', 'Superstar', 'White/Black', 1969, 'Herkenbaar aan de rubberen shell toe.'],
            ['Adidas', 'Stan Smith', 'White/Green', 1971, 'Minimalistische tennisschoen van leer.'],
            ['Adidas', 'Samba', 'Black/White', 1950, 'Oorspronkelijk gemaakt als indoor voetbalschoen.'],
            ['New Balance', '550', 'White/Green', 1989, 'Retro basketbalschoen die opnieuw populair werd.'],
            ['New Balance', '990v6', 'Grey', 2022, 'Comfortabele Made in USA-runner.'],
            ['Puma', 'Suede Classic', 'Black/White', 1968, 'Suède sneaker met een lange geschiedenis in hiphop.'],
            ['Puma', 'Palermo', 'Green/Gum', 1980, 'Terrace-klassieker met een gum zool.'],
        ];

        foreach ($sneakers as [$brand, $name, $colorway, $year, $description]) {
            Sneakers::create([
                'brand_id'     => $brands[$brand],
                'name'         => $name,
                'colorway'     => $colorway,
                'release_year' => $year,
                'description'  => $description,
            ]);
        }
    }
}
