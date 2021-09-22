<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ResultComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.result-component')->layout('livewire.admin.index');
    }
}
