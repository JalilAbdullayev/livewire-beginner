<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component {
    use WithPagination;

    public function placeholder() {
        return view('placeholder');
    }

    public function render() {
        sleep(3);
        return view('livewire.user-list', [
            'users' => User::latest()->paginate(5),
            'count' => User::count()
        ]);
    }
}