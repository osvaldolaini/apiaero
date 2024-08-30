<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AircraftsResource;
use App\Models\Admin\Access;
use App\Models\Aircrafts;
use App\Models\User;
use Illuminate\Http\Request;

class AircraftsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,)
    {
        $token = $request->bearerToken();
        $user = User::where('token', $token)->first();

        Access::create([
            'user_id'       => $user->id,
            'token'         => $token,
            'api'           => 'airfields',
            'item'          => 'all',
        ]);
        return [
            'lastUpdateData' => date("Y-m-d"),
            'version' => config('app.version', 'V1'),
            'data' => AircraftsResource::collection(Aircrafts::all())
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
    public function show($prefix, Request $request)
    {
        // Validação do código OACI
        if (mb_strlen($prefix, 'UTF-8') != 5) {
            return response()->json([
                'message' => 'O prefixo deve ter 5 (cinco) dígitos'
            ], 400);
        }
        // Buscar o aeródromo
        $aircraft = AircraftsResource::collection(Aircrafts::where('marca', $prefix)->get());

        if ($aircraft->count() > 0) {
            $token = $request->bearerToken();
            $user = User::where('token', $token)->first();
            Access::create([
                'user_id'       => $user->id,
                'token'         => $token,
                'api'           => 'aircrafts',
                'item'          => $prefix,
            ]);
            if ($aircraft->count() == 1) {
                $aircraft = $aircraft->first();
            }
            return response()->json([
                'message' => 'Sucesso',
                'lastUpdateData' => date("Y-m-d"),
                'version' => env('APP_VERSION', 'V1'),
                'data' => $aircraft,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Ops, aeronave não encontrada'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aircrafts $aircrafts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aircrafts $aircrafts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aircrafts $aircrafts)
    {
        //
    }
}
