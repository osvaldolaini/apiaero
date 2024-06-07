<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Aircrafts extends Component
{
    public $breadcrumb = 'Aeronaves';
    public function render()
    {
        $aircrafts = json_encode(Http::get(url('api/v1/aeronaves'))->json());
        return view('livewire.admin.aircrafts',[
            'aircrafts'=>json_decode( $aircrafts)
        ]);
    }
}
