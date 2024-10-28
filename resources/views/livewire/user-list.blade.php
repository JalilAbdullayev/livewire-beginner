<div class="p-5 mx-auto max-w-md">
    <div wire:offline>
        <div wire:offline.class="mt-10" class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50"
             role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
            </div>
        </div>
    </div>
    <h2 class="text-2xl mb-3">
        Users List
    </h2>
    {{--
    blur input focusu itirdikdə metod işləyir.
    debounce user yazmağı dayandıranda verilmiş müddət keçəndən sonra işləyir.
    throttle hər request arasında verilmiş müddət qədər ara saxlayır.
    --}}
    <input type="search" wire:offline.remove wire:model.live.throttle.200ms="search" placeholder="Search"
           class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full p-2.5
           mx-auto"/>
    <div role="status" class="my-3 p-4 border border-gray-200 divide-y divide-gray-200 rounded shadow md:p-6">
        @foreach($this->users as $user)
            <div wire:key="{{ $user->id }}" class="flex items-center justify-between py-3">
                <div>
                    <div class="text-gray-900 rounded-full w-24 mb-23 truncate">
                        {{ $user->name }}
                    </div>
                    <div class="text-xs text-gray-600 w-32 rounded-full">
                        {{ $user->email }}
                    </div>
                </div>
                <button wire:offline.attr="disabled" class="text-white bg-teal-500 px-3 py-1 rounded-full">
                    View
                </button>
            </div>
        @endforeach
    </div>
</div>
