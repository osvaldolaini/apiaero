<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Aircraft extends Component
{
    public $breadcrumb = 'Aeronaves';
    public $showModalView = false;
    public $detail;
    public function render()
    {
        $token = config('app.api_key');
        $aircrafts = json_encode(Http::withToken($token)->get(url('api/v1/aeronaves'))->json());

        return view('livewire.admin.aircrafts',[
            'aircrafts'=>json_decode( $aircrafts),
            'user' =>Auth::user()->group,
        ]);
    }
    public function refreshAircrafts()
    {
        // Caminho do arquivo JSON
        $path = storage_path('app/public/api-anac/dados_aeronaves.csv');
         // Verifica se o arquivo existe
         if (!file_exists($path)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        // Lê o conteúdo do arquivo CSV
        $csv = array_map('str_getcsv', file($path));

        // Pega os cabeçalhos
        $headers = array_shift($csv);

        // Transforma em JSON
        $data = array_map(function($row) use ($headers) {
            return array_combine($headers, $row);
        }, $csv);
        dd($data);

        // Itera sobre os elementos do objeto
        foreach ($data as $item) {

            Airfields::updateOrCreate([
                'codigoOaci' => $item->CódigoOACI
            ], [
                'active'                => 1,
                'typeUse'               => 'PÚBLICO',
                'codigoOaci'            => $item->CódigoOACI,
                'ciad'                  => $item->CIAD,
                'name'                  => $item->Nome,
                'city'                  => $item->Município,
                'cityServed'            => (isset($item->MunicípioServido) ? $item->MunicípioServido : null),
                'state'                 => $item->UF,
                'stateServed'           => (isset($item->UFSERVIDO) ? $item->UFSERVIDO : null),
                'altitude'              => $item->Altitude,
                'latitude'              => $item->Latitude,
                'longitude'             => $item->Longitude,
                'latGeoPoint'           => str_replace(',', '.', $item->LatGeoPoint),
                'lonGeoPoint'           => str_replace(',', '.', $item->LonGeoPoint),
                'length'                => ($item->Comprimento1 ?
                                            str_replace(',', '.', $item->Comprimento1) : null),
                'length2'               => ($item->Comprimento2 ?
                                            str_replace(',', '.', $item->Comprimento2) : null),
                'width'                 => ($item->Largura1 ?
                                            str_replace(',', '.', $item->Largura1) : null),
                'width2'                => ($item->Largura2 ?
                                            str_replace(',', '.', $item->Largura2) : null),
                'surface'               => $item->Superfície1,
                'surface2'              => $item->Superfície2,
                'designation'           => $item->Designação1,
                'designation2'          => $item->Designação2,
                'resistence'            => $item->Resistência1,
                'resistence2'           => $item->Resistência2,
                'operationDay'          => $item->OperaçãoDiurna,
                'operationNight'        => $item->OperaçãoNoturna,
                'ordinanceRegistration' => $item->PortariadeRegistro,
                'ordinanceLink'         => $item->LinkPortaria,
                'registrationValidity'  => ($item->ValidadedoRegistro ?
                                            implode("-", array_reverse(explode("/", $item->ValidadedoRegistro)))
                                            : null),
            ]);


        }

        return response()->json(['success' => 'Arquivo processado com sucesso']);
    }
    //READ
    public function showModalRead($prefix)
    {
        $this->showModalView = true;
        if (isset($prefix)) {
            $token = config('app.api_key');
            $aircrafts = json_encode(Http::withToken($token)
                ->get(url('api/v1/aeronaves/'.$prefix))->json());
            $aircrafts = json_decode($aircrafts);

            $this->detail = [
                'Prefixo'       => $aircrafts->data->prefix,
                'Proprietário'  => $aircrafts->data->owner,
                'Versão'        => $aircrafts->version,
                'Atualizada'    => $aircrafts->lastUpdateData,
            ];
        } else {
            $this->detail = '';
        }
    }
}
