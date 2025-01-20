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

    // Endpoint para buscar discos por un criterio (por ejemplo, nombre del álbum)
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $records = Record::where('album', 'like', '%' . $query . '%')->get();
    //     return response()->json($records);
    // }
}
