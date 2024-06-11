<?php

namespace App\Livewire\Page;

use App\Livewire\Admin\Airfield;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Teste extends Component
{
    public $aircrafts;
    public $airfields;
    public $token;
    public $urlApiAircraft;
    public $urlApiAirfield;
    public function mount()
    {
        $this->token = config('app.api_key');
        $this->urlApiAircraft = url('api/v1/aeronaves/{prefix}');
        $this->urlApiAirfield = url('api/v1/aeroportos/{codigo_oaci}');
        $this->airfields = json_encode(Http::withToken($this->token)
            ->get(url('api/v1/aeroportos/sbpa'))->json());
        $this->aircrafts = json_encode(Http::withToken($this->token)
            ->get(url('api/v1/aeronaves/ppgiv'))->json(),true);
    }
    public function render()
    {
        return view('livewire.page.teste',
            [
                'airfields' => $this->airfields,
                'aircrafts' => $this->aircrafts,
            ]
        );
    }
    public function selectApiAircraft()
    {
        $this->aircrafts = json_encode(Http::withToken($this->token)
            ->get(url($this->urlApiAircraft))->json());
    }
    public function selectApiAirfield()
    {
        $this->airfields = json_encode(Http::withToken($this->token)
            ->get(url($this->urlApiAirfield))->json());
    }


}
