<?php

namespace App\Livewire\Admin;

use App\Models\Aircrafts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

use League\Csv\Reader;

class Aircraft extends Component
{
    public $breadcrumb = 'Aeronaves';
    public $showModalView = false;
    public $detail;
    public function render()
    {
        // $token = config('app.api_key');
        // $aircrafts = json_encode(Http::withToken($token)
        // ->get(url('api/v1/aeronaves'))->json());
        $aircrafts = Aircrafts::select('marca','nm_fabricante','nr_ano_fabricacao','nm_operador')
        ->orderBy('updated_at','asc')->get();
        return view('livewire.admin.aircrafts', [
            'aircrafts' => $aircrafts,
            'user' => Auth::user()->group,
        ]);
    }
    public function refreshAircrafts()
    {
        // Caminho do arquivo CSV
        $path = storage_path('app/public/api-anac/dados_aeronaves.csv');
        // Verifica se o arquivo existe
        if (!file_exists($path)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        // Lê o conteúdo do arquivo CSV
        $csv = Reader::createFromPath($path, 'r');
        $csv->setDelimiter(';'); // Define o delimitador como ';'
        $csv->setHeaderOffset(0); // Define a linha de cabeçalho

        // Itera sobre os registros do CSV
        foreach ($csv as $record) {
            // dd($record);
            Aircrafts::updateOrCreate([
                'marca' => $record['MARCA']
            ], [
                'active'                => 1,
                'marca'                 => $record['MARCA'],
                'proprietario'          => $record['PROPRIETARIO'],
                'outros_proprietarios'  => $record['OUTROS_PROPRIETARIOS'],
                'sg_uf'                 => $record['SG_UF'],
                'cpf_cnpj'              => $record['CPF_CNPJ'],
                'nm_operador'           => $record['NM_OPERADOR'],
                'outros_operadores'     => $record['OUTROS_OPERADORES'],
                'uf_operador'           => $record['UF_OPERADOR'],
                'cpf_cgc'               => $record['CPF_CGC'],
                'nr_cert_matricula'     => $record['NR_CERT_MATRICULA'],
                'nr_serie'              => $record['NR_SERIE'],
                'cd_categoria'          => $record['CD_CATEGORIA'],
                'cd_tipo'               => $record['CD_TIPO'],
                'ds_modelo'             => $record['DS_MODELO'],
                'nm_fabricante'         => $record['NM_FABRICANTE'],
                'cd_cls'                => $record['CD_CLS'],
                'nr_pmd'                => ($record['NR_PMD'] == '' ? NULL : $record['NR_PMD']),
                'cd_tipo_icao'          => $record['CD_TIPO_ICAO'],
                'nr_tripulacao_min'     => ($record['NR_TRIPULACAO_MIN'] == 'null' ? NULL : $record['NR_TRIPULACAO_MIN']),
                'nr_passageiros_max'    => ($record['NR_PASSAGEIROS_MAX'] == 'null' ? NULL : $record['NR_PASSAGEIROS_MAX']),
                'nr_assentos'           => ($record['NR_ASSENTOS'] == 'null' ? NULL : $record['NR_ASSENTOS']),
                'nr_ano_fabricacao'     => ($record['NR_ANO_FABRICACAO'] == 'null' ? NULL : $record['NR_ANO_FABRICACAO']),
                'dt_validade_cva'       => $record['DT_VALIDADE_CVA'],
                'dt_validade_ca'        => $record['DT_VALIDADE_CA'],
                'dt_canc'               => ($record['DT_CANC'] == 'null' ? NULL : $record['DT_CANC']),
                'ds_motivo_canc'        => $record['DS_MOTIVO_CANC'],
                'cd_interdicao'         => $record['CD_INTERDICAO'],
                'cd_marca_nac1'         => $record['CD_MARCA_NAC1'],
                'cd_marca_nac2'         => $record['CD_MARCA_NAC2'],
                'cd_marca_nac3'         => $record['CD_MARCA_NAC3'],
                'cd_marca_estrangeira'  => $record['CD_MARCA_ESTRANGEIRA'],
                'ds_gravame'            => $record['DS_GRAVAME'],
                'dt_matricula'          => ($record['DT_MATRICULA'] == '' ? NULL : $record['DT_MATRICULA'])
            ]);
            // break;
        }
        return response()->json(['success' => 'Arquivo processado com sucesso']);
    }
    //READ
    public function showModalRead($prefix)
    {
        $this->showModalView = true;
        if (isset($prefix)) {
            // $token = config('app.api_key');
            // $aircrafts = json_encode(Http::withToken($token)
            //     ->get(url('api/v1/aeronaves/' . $prefix))->json());
            // $aircrafts = json_decode($aircrafts);

            $aircrafts = Aircrafts::where('marca',$prefix)->first();
            $this->detail = [
                'Prefixo'       => $aircrafts->prefix,
                'Proprietário'  => $aircrafts->proprietario,
                'Versão'        => $aircrafts->version,
                'Atualizada'    => $aircrafts->lastUpdateData,
            ];
        } else {
            $this->detail = '';
        }
    }
}
