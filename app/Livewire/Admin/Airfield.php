<?php

namespace App\Livewire\Admin;

use App\Models\Airfields;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Airfield extends Component
{
    public $breadcrumb = 'Aeródromos';
    public $showModalView = false;
    public $detail;
    public function render()
    {
        $token = config('app.api_key');
        // $airfields = json_encode(Http::withToken($token)
        //     ->get(url('api/v1/aeroportos'))->json());
        $airfields = Airfields::orderBy('updated_at','asc')->get();

        return view('livewire.admin.airfields', [
            // 'airfields' => json_decode($airfields),
            'airfields' => $airfields,
            'user' => Auth::user()->group,
        ]);
    }
    public function refreshPublic()
    {
        // Caminho do arquivo JSON
        $path = storage_path('app/public/api-anac/AerodromosPublicos.json');
        // dd($path);
        // Verifica se o arquivo existe
        if (!file_exists($path)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        // Lê o conteúdo do arquivo
        $json = file_get_contents($path);

        // Remove o BOM se presente
        if (substr($json, 0, 3) === "\xEF\xBB\xBF") {
            $json = substr($json, 3);
        }

        // Decodifica o JSON para um objeto PHP
        $data = json_decode($json);
        // dd($data);
        // Verifica se houve erro na decodificação
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Erro ao decodificar JSON'], 400);
        }

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
    public function refreshPrivate()
    {
        // Caminho do arquivo JSON
        $path = storage_path('app/public/api-anac/AerodromosPrivados.json');
        // dd($path);
        // Verifica se o arquivo existe
        if (!file_exists($path)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        // Lê o conteúdo do arquivo
        $json = file_get_contents($path);

        // Remove o BOM se presente
        if (substr($json, 0, 3) === "\xEF\xBB\xBF") {
            $json = substr($json, 3);
        }

        // Decodifica o JSON para um objeto PHP
        $data = json_decode($json);
        // dd($data);
        // Verifica se houve erro na decodificação
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Erro ao decodificar JSON'], 400);
        }

        // Itera sobre os elementos do objeto
        foreach ($data as $item) {

            Airfields::updateOrCreate([
                'codigoOaci' => $item->CódigoOACI
            ], [
                'active'                => 1,
                'typeUse'               => 'PRIVADO',
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
                'registrationValidity'  => (isset($item->ValidadedoRegistro) ?
                                            implode("-", array_reverse(explode("/", $item->ValidadedoRegistro)))
                                            : null),
            ]);


        }

        return response()->json(['success' => 'Arquivo processado com sucesso']);
    }
    //READ
    public function showModalRead($codigoOaci)
    {
        $this->showModalView = true;
        if (isset($codigoOaci)) {
            $token = config('app.api_key');
            // $airfields = json_encode(Http::withToken($token)
            //     ->get(url('api/v1/aeroportos/'.$codigoOaci))->json());
            // $airfields = json_decode($airfields);
            $airfields = Airfields::where('codigoOaci',$codigoOaci)->first();

            $this->detail = [
                'Código OACI'   => $airfields->codigoOaci,
                'Latitude'      => $airfields->latitude,
                'Longitude'     => $airfields->longitude,
                'Versão'        => $airfields->version,
                'Atualizada'    => ($airfields->updated_at ? Carbon::parse( $airfields->updated_at)->format('d/m/Y') : null),
            ];
        } else {
            $this->detail = '';
        }
    }
}
