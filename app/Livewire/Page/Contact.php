<?php

namespace App\Livewire\Page;

use App\Models\Admin\Emails;
use Livewire\Component;

class Contact extends Component
{
    public $config;
    public $name;
    public $email;
    public $rules;
    public $message;
    public $sended = false;

    public function render()
    {
        // $this->config = Configs::find(1);
        return view('livewire.page.contact');
    }

    public function send()
    {
        $this->rules = [
            'message' => 'required',
            'name' => 'required',
        ];
        $this->validate();
        Emails::create([
            'title'     => 'Mensagem enviada do site',
            'active'     => 0,
            'text'      => $this->message,
            'send_by'   =>  $this->name.' <'.$this->email.'>',
        ]);
        $this->sended = true;
    }
}
