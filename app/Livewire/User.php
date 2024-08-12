<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
    public $name = 'Carregando...';
    public $hookName = 'n/a';
    public $propertyName = 'n/a';
    public $value = 'n/a';

    public function render()
    {
        return view('livewire.user');
    }

    public function mount($user)
    {
        $this->name = $user;
    }

    public function updated($property, $value)
    {
        $this->propertyName = $value;

        $this->hookName = 'updated';
        $this->propertyName = $property;
        $this->value = $value;
    }

    public function updating()
    {
        $this->hookName = 'updating';
    }
}
