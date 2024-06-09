<?php

namespace App\Livewire\Admin\Charts;

use App\Models\Admin\Access;
use Livewire\Component;

class AccessAircrafts extends Component
{
    public $labels;
    public $color;
    public $data;

    public function render()
    {
        $this->chart();
        return view('livewire.admin.charts.access-aircrafts');
    }
    public function chart()
    {
        $data = array();
        $total=0;

        $aircrafts = Access::select('item')
        ->where('api','aircrafts')
        ->where('item','!=','all')
        ->get()
        ->groupBy('item')
        ->sort();
        // dd($aircrafts);

            foreach ($aircrafts as $key => $item) {
                $val = $item->count();
                $data[]=array(
                    'item'=>$key,
                    'qtd'=>$item->count(),
                );
                $total += $val;
            }

            foreach ($data as $key) {
                $val = ($key['qtd'] * 100) / $total;
                $this->labels[] = $key['item'];
                $this->data[] = number_format($val, 0, '.', '');
            }
    }

}
