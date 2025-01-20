<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    // Endpoint para listar discos con paginación
    public function showRecords($page)
    {
        $recordsPerPage = 10;
        $records = Record::select('id', 'title', 'price')
                         ->skip(($page - 1) * $recordsPerPage)
                         ->take($recordsPerPage)
                         ->get();
        return response()->json($records);
    }

    // Endpoint para mostrar detalles de un disco específico
    public function showRecord($id)
    {
        $record = Record::find($id);
        return response()->json($record);
    }

    // Endpoint para listar discos por género con paginación
    public function getByGenre($id, $page)
    {
        $recordsPerPage = 10;
    
        // Obtener los registros del género especificado con paginación
        $records = Record::join('genre_record', 'records.id', '=', 'genre_record.record_id')
                         ->where('genre_record.genre_id', $id)
                         ->select('records.id', 'records.title', 'records.release_year')
                         ->skip(($page - 1) * $recordsPerPage)
                         ->take($recordsPerPage)
                         ->get();
    
        return response()->json($records);
    }
    
}
