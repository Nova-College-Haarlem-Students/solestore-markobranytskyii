<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Contracts\View\View;

class BrandController extends Controller
{
    public function index(): View
    {
        $brands = Brand::query()->orderBy('name')->get();

        return view('index', ['brands' => $brands]);
    }
}
