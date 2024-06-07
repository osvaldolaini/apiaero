<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AirfieldsResource;
use App\Models\Airfields;
use Illuminate\Http\Request;

class AirfieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'lastUpdateData' => date("Y-m-d"),
            'version' => env('APP_VERSION', 'V1'),
            'data' => AirfieldsResource::collection(Airfields::all())
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($codigoOaci)
    {
        // Validação do código OACI
        if (mb_strlen($codigoOaci, 'UTF-8') != 4) {
            return response()->json([
                'message' => 'O código OACI deve ter 4 (quatro) dígitos'
            ], 400);
        }
        // Buscar o aeródromo
        $airfield = Airfields::where('codigoOaci',$codigoOaci)->get();

        if ($airfield->count() > 0) {
            return response()->json([
                'message' => 'Sucesso',
                'lastUpdateData' => date("Y-m-d"),
                'version' => env('APP_VERSION', 'V1'),
                'data' => $airfield
            ], 200);
        } else {
            return response()->json([
                'message' => 'Ops, aeródromo não encontrado'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airfields $airfields)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Airfields $airfields)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airfields $airfields)
    {
        //
    }
}
