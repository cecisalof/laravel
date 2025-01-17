<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener los discos fijos con id 1 y 2
        $fixedRecords = Record::whereIn('id', [1, 2])->get();

        // Obtener tres discos aleatorios (excluyendo los fijos)
        $randomRecords = Record::inRandomOrder()->whereNotIn('id', [1, 2])->take(3)->get();

        // Combinar los discos fijos y aleatorios
        $records = $fixedRecords->merge($randomRecords);
    
        return view('home', compact('records')); // Pasa los registros a la vista
    }
}
