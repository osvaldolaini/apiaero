<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AircraftsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'prefix' => $this->marca,
            'proprietario' => $this->proprietario,
            'outros_proprietarios' => $this->outros_proprietarios,
            'sg_uf' => $this->sg_uf,
            'cpf_cnpj' => $this->cpf_cnpj,
            'nm_operador' => $this->nm_operador,
            'outros_operadores' => $this->outros_operadores,
            'uf_operador' => $this->uf_operador,
            'cpf_cgc' => $this->cpf_cgc,
            'nr_cert_matricula' => $this->nr_cert_matricula,
            'nr_serie' => $this->nr_serie,
            'cd_categoria' => $this->cd_categoria,
            'cd_tipo' => $this->cd_tipo,
            'ds_modelo' => $this->ds_modelo,
            'nm_fabricante' => $this->nm_fabricante,
            'cd_cls' => $this->cd_cls,
            'nr_pmd' => $this->nr_pmd,
            'cd_tipo_icao' => $this->cd_tipo_icao,
            'nr_tripulacao_min' => $this->nr_tripulacao_min,
            'nr_passageiros_max' => $this->nr_passageiros_max,
            'nr_assentos' => $this->nr_assentos,
            'nr_ano_fabricacao' => $this->nr_ano_fabricacao,
            'dt_validade_cva' => $this->dt_validade_cva,
            'dt_validade_ca' => $this->dt_validade_ca,
            'dt_canc' => $this->dt_canc,
            'ds_motivo_canc' => $this->ds_motivo_canc,
            'cd_interdicao' => $this->cd_interdicao,
            'cd_marca_nac1' => $this->cd_marca_nac1,
            'cd_marca_nac2' => $this->cd_marca_nac2,
            'cd_marca_nac3' => $this->cd_marca_nac3,
            'cd_marca_estrangeira' => $this->cd_marca_estrangeira,
            'ds_gravame' => $this->ds_gravame,
            'dt_matricula' => $this->dt_matricula,
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)
                ->format('d/m/Y'),
        ];
    }
}
