<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Airfields extends Component
{

    public $breadcrumb = 'Aeródromos';

    public function render()
    {
        $airfields = json_encode(Http::get(url('api/v1/aeroportos'))->json());
        return view('livewire.admin.airfields',[
            'airfields'=>json_decode( $airfields)
        ]);
    }
}
