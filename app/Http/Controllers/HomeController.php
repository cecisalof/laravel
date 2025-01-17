<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener los primeros 5 discos de vinilo
        $records = Record::take(5)->get();  // Esto debe adaptarse según la lógica real para obtener discos.
    
        return view('home', compact('records')); // Pasa los registros a la vista
    }
}
