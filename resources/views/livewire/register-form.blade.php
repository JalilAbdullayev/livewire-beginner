<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2xl text-gray-800 mb-5">
            Create New Account
        </h2>
    </div>
    @if(session('success'))
        <span class="text-green-500">
            {{ session('success') }}
        </span>
    @endif
    <form wire:submit="create">
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
            Name
        </label>
        <input type="text" wire:model="name" id="name" placeholder="Name" class="ring-1 ring-inset ring-gray-300
        bg-gray-100 text-gray-900 text-sm rounded block w-full"/>
        @error('name')
        <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror
        <label for="email" class="mt-3 block text-sm font-medium leading-6 text-gray-900">
            E-mail
        </label>
        <input type="email" wire:model="email" id="email" placeholder="Name" class="ring-1 ring-inset ring-gray-300
        bg-gray-100 text-gray-900 text-sm rounded block w-full"/>
        @error('email')
        <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror
        <label for="password" class="mt-3 block text-sm font-medium leading-6 text-gray-900">
            Password
        </label>
        <input type="password" wire:model="password" id="password" placeholder="Password" class="ring-1 ring-inset
        ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full"/>
        @error('password')
        <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror
        <label for="image" class="mt-3 block text-sm font-medium leading-6 text-gray-900">
            Profile picture
        </label>
        <input wire:model="image" type="file" id="image" accept="image/png, image/jpeg"
               class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full"/>
        @error('image')
        <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror
        @if($image)
            <img src="{{ $image->temporaryUrl() }}" alt="" class="rounded w-10 h-10 mt-5 block"/>
        @endif
        <div wire:loading wire:target="image">
            <span class="text-green-500">
                Uploading...
            </span>
        </div>
        {{--
        delay 200ms gecikdirir.
        longest 1s.
        --}}
        <div wire:loading.delay.longest>
            <span class="text-green-500">
                Sending...
            </span>
        </div>
        {{--
        remove tamamilə silir.
        attr atributunu dəyişdirir.
        class loading zamanı class əlavə edir.
        class.remove class silir
        --}}
        <button {{--wire:click.prevent="ReloadList"--}} type="submit" @click="$dispatch('user-created')" class="block mt-3
         px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">
            Reload List
        </button>
        <button {{--wire:loading.remove--}} wire:loading.attr="disabled" wire:loading.class.remove="text-white"
                type="submit" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded
                hover:bg-teal-600">
            Create +
        </button>
    </form>
</div>
