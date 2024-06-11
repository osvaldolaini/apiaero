<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Aircrafts extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $fillable = [
        'marca','proprietario','outros_proprietarios','sg_uf','cpf_cnpj','nm_operador',
        'outros_operadores','uf_operador','cpf_cgc','nr_cert_matricula','nr_serie','cd_categoria',
        'cd_tipo','ds_modelo','nm_fabricante','cd_cls','nr_pmd','cd_tipo_icao','nr_tripulacao_min',
        'nr_passageiros_max','nr_assentos','nr_ano_fabricacao','dt_validade_cva','dt_validade_ca',
        'dt_canc','ds_motivo_canc','cd_interdicao','cd_marca_nac1','cd_marca_nac2','cd_marca_nac3',
        'cd_marca_estrangeira','ds_gravame','dt_matricula'
    ];
    public function getRouteKeyName(): string
    {
        return 'marca';
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable);
    }
}
