<?php

use App\Models\Brand;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

uses(LazilyRefreshDatabase::class);

test('the home page displays available brands', function () {
    Brand::create([
        'name' => 'Nike',
        'country' => 'Nederland',
        'description' => 'Comfortabele schoenen',
    ]);

    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('Nike')
        ->assertSee('Nederland')
        ->assertSee('Comfortabele schoenen');
});

test('the home page shows a message when no brands exist', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('Geen merken gevonden.');
});
