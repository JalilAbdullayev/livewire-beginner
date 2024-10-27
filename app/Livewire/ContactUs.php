<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactUs extends Component {
    #[Rule('required|min:3|max:255')]
    public $test;

    public ContactUsForm $form;

    public function submitForm(): void {
        $this->form->validate();
        $this->form->sendEmail();
        session()->flash('success', 'Form submitted!');
        // Ancaq subject və message-ı reset edəcək.
        $this->form->reset('subject', 'message');
    }

    public function render() {
        return view('livewire.contact-us');
    }
}
