<div class="p-5 mx-auto max-w-md">
    <h2 class="text-2xl mb-3">
        Users List
    </h2>
    {{--
    blur input focusu itirdikdə metod işləyir.
    debounce user yazmağı dayandıranda verilmiş müddət keçəndən sonra işləyir.
    throttle hər request arasında verilmiş müddət qədər ara saxlayır.
    --}}
    <input type="search" wire:model.live.throttle.200ms="search" placeholder="Search"
           class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full p-2.5
           mx-auto"/>
    <div role="status" class="my-3 p-4 border border-gray-200 divide-y divide-gray-200 rounded shadow
    md:p-6">
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
                <button class="text-white bg-teal-500 px-3 py-1 rounded-full">
                    View
                </button>
            </div>
        @endforeach
    </div>
</div>
