<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Hello, Livewire!')]
class HomePage extends Component {
    public function render() {
        return view('livewire.home-page');
    }
}