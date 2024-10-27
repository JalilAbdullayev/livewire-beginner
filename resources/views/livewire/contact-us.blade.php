<div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
        Contact Us
    </h2>
    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
        Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us
        know.
    </p>
    @if(session('success')) @endif
    <form wire:submit="submitForm" class="space-y-8">
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                E-mail
            </label>
            <input wire:model="form.email" type="email" id="email" class="block p-3 w-full text-sm text-gray-900
            rounded-lg border shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded"/>
            @error('form.email')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">
                Subject
            </label>
            <input wire:model="form.subject" type="text" id="subject" class="block p-3 w-full text-sm text-gray-900
            rounded-lg border shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded"/>
            @error('form.subject')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                Message
            </label>
            <textarea id="message" rows="6" wire:model="form.message" class="block p-2.5 w-full text-sm
            text-gray-900 bg-gray-50 rounded-lg shadow-sm border border border-gray-300 rounded"></textarea>
            @error('form.message')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="flex items-center">
            <button wire:loading.attr="disabled" type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-teal-500">
                Send message
            </button>
        </div>
    </form>
</div>
