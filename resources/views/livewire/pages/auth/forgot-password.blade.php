<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('livewire.partials.app')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink($this->only('email'));

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div class="card-body">
    <title>Forgot Password</title>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email"
                class="block mt-1 w-full {{ $errors->has('email') ? 'input-error' : '' }}" type="email" name="email"
                required autofocus :placeholder="__('Enter Your Email Adress')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col gap-2 items-center justify-end mt-4">
            <x-primary-button class="w-full">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
            <div class="link link-hover flex-1 items-center gap-1" href="{{ route('login') }}" wire:navigate>
                <button class="btn btn-ghost btn-circle btn-sm"><i class="fa fa-arrow-left"></i></button>
                <span>{{ __('Back To Login') }}</span>
            </div>
        </div>
    </form>
</div>
