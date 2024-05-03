<?php

namespace App\Livewire;

use Livewire\Component;

class BadComponent extends Component
{
    public function testAction()
    {

    }
    public function render()
    {
        return view('livewire.bad-component');
    }
}
