<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactUsForm extends Form {
    #[Rule('required|email|max:255')]
    public ?string $email;

    #[Rule('required|min:3|max:255')]
    public ?string $subject;

    #[Rule('required|min:5|max:255')]
    public ?string $message;

    public function sendEmail(): void {
        sleep(3);
    }
}
