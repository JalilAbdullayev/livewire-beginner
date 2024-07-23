<div>
    <form wire:submit="createNewUser">
        <input wire:model="name" type="text" placeholder="Name"/>
        <input wire:model="email" type="email" placeholder="E-mail"/>
        <input wire:model="password" type="password" placeholder="Password"/>
        <button>
            Create
        </button>
    </form>
    <hr/>
    @foreach($users as $user)
        <h3>
            {{ $user->name }}
        </h3>
    @endforeach
</div>
