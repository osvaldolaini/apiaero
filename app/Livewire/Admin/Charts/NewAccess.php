<?php

namespace App\Livewire\Admin\Charts;

use App\Models\Admin\Access;
use App\Models\Admin\Registers\Partner;
use Carbon\Carbon;
use DateTime;
use Livewire\Component;

class NewAccess extends Component
{
    public $labels;
    public $data;

    public function render()
    {
        $this->chart();
        // dd($this->data);
        return view('livewire.admin.charts.new-access');
    }
    public function chart()
    {
        $month = array();

        for ($i = 0; $i < 12; $i++) {
            $m = new DateTime("-" . $i . " months");
            $month[] = $m->format('Y-m');
        }

        sort($month);
        foreach ($month as $key => $value) {
            $news = 0;
            $today = Carbon::parse($value)->locale('pt-BR');
            $month_br[] = $today->translatedFormat('M');
            $pertners =  Access::where(Access::raw("DATE_FORMAT(created_at, '%Y-%m')"), $value)
            ->get();
            foreach ($pertners as $key) {
                $news ++;
            }
            $this->data[] =  $news;
        }
        $this->labels =  $month_br;
    }
}
