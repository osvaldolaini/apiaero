<?php

namespace App\Livewire\Page;

use App\Livewire\Admin\Airfield;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Documentation extends Component
{
    public $aircrafts;
    public $airfields;
    public $token;
    public $urlApiAircraft;
    public $urlApiAirfield;
    public function mount()
    {
        $this->urlApiAircraft = url('api/v1/aeronaves/{prefix}');
        $this->urlApiAirfield = url('api/v1/aeroportos/{codigo_oaci}');
    }
    public function render()
    {
        $this->token = config('app.api_key');
        $this->airfields = json_encode(Http::withToken($this->token)
            ->get(url('api/v1/aeroportos/sbpa'))->json());
        $this->aircrafts = json_encode(Http::withToken($this->token)
            ->get(url('api/v1/aeronaves/ppgiv'))->json());
        // dd($aircrafts);
        return view('livewire.page.documentation',
            [
                'airfields' => $this->airfields,
                'aircrafts' => $this->aircrafts,
            ]
        );
    }

}
