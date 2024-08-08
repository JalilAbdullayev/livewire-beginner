<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component {
    use WithPagination;

    public string $search = '';

    public function mount($search) {
        $this->search = $search;
        unset($this->users);
    }

    #[Computed()]
    public function users() {
        return User::latest()->where('name', 'like', "%{$this->search}%")->paginate(5);
    }
}
