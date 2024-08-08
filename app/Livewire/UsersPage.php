<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersPage extends Component {
    public User $user;

    public function render() {
        return view('livewire.users-page')->title($this->user->name);
    }
}
