<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component {
    public string $userName = "Test User";

    public function createNewUser() {
        User::create([
            'name' => 'Test2',
            'email' => 'test2@example.com',
            'password' => 'password'
        ]);
    }

    public function render() {
        $title = "Test";
        $users = User::all();
        return view('livewire.clicker', compact('title', 'users'));
    }
}
