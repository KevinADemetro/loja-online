<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriasController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Categorias/ListaCategorias', [
            'categorias' => Categorias::all()
        ]);
    }
}
