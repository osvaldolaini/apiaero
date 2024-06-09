<?php

namespace App\Livewire\Admin\Charts;

use App\Models\Admin\Access;
use App\Models\Admin\Financial\Cashier;
use DateTime;
use Livewire\Component;

class AccessAirfields extends Component
{
    public $labels;
    public $color;
    public $data;

    public function render()
    {
        $this->chart();
        return view('livewire.admin.charts.access-airfields');
    }
    public function chart()
    {
        $data = array();
        $total=0;

        $airfields = Access::select('item')
        ->where('api','airfields')
        ->where('item','!=','all')
        ->get()
        ->groupBy('item')
        ->sort();
        // dd($airfields);

            foreach ($airfields as $key => $item) {
                $val = $item->count();
                // dd($item);
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
