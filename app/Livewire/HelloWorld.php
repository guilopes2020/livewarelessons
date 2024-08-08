<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Guilherme Lopes';
    public $salutation = 'Hello';
    public $color = '#FFFFFF';
    public $salutationOptions = ['Hello', 'Bye Bye'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}
