<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Clicker extends Component {
    #[Rule('required|min:2|max:50')]
    public string $name;
    #[Rule('required|email|unique:users')]
    public string $email;
    #[Rule('required|min:5')]
    public string $password;

    public function createNewUser() {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }

    public function render() {
        $users = User::all();
        return view('livewire.clicker', compact('users'));
    }
}
