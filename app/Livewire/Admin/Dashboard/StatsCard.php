<?php

namespace App\Livewire\Admin\Dashboard;


use App\Models\Admin\Financial\Bill;
use App\Models\Admin\Financial\Cashier;
use App\Models\Admin\Financial\Received;
use App\Models\Admin\Locations\Installment;
use App\Models\Admin\Locations\Location;
use App\Models\Admin\Pool\Pass;
use App\Models\Admin\Pool\Pool;
use App\Models\Admin\Registers\Partner;
use App\Models\User;
use Livewire\Component;

class StatsCard extends Component
{
    public $users;
    public $version;
    public $update;

    public $charts;

    public function mount(
        $users,
        $update,
        $version,
        $charts
    ) {

        $this->charts = $charts;

        if ($users) {
            $this->users = User::all()->count();
        }
        if ($version) {
            $this->version = config('app.version');
        }

        if ($update) {
            $this->update = date('d/m/Y');
        }

    }
    public function render()
    {
        return view('livewire.admin.dashboard.stats-card');
    }

}
