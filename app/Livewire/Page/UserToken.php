<?php

namespace App\Livewire\Page;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserToken extends Component
{
    public $token;
    public function mount()
    {
        $this->token = Auth::user()->token;
    }
    public function render()
    {
        return view('profile.token');
    }
}
