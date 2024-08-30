<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
new #[Layout('livewire.partials.app')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="card-body">
    <title>{{ __('Login') }}</title>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit.prevent="login">
        <!-- Email Address -->
        <div class="form-control">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email"
                class="block mt-1 w-full {{ $errors->has('form.email') ? 'input-error' : '' }}" type="email"
                name="email" required autofocus autocomplete="username" :placeholder="__('Enter Your Email')" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="form-control my-3">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password"
                class="block mt-1 w-full  {{ $errors->has('form.password') ? 'input-error' : '' }}" type="password"
                name="password" required autocomplete="current-password" :placeholder="__('Enter Your Password')" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="form-control mt-4">
            <div class="flex justify-between items-center">
                <label for="remember" class="inline-flex items-center cursor-pointer">
                    <input wire:model="form.remember" id="remember" type="checkbox"
                        class="checkbox checkbox-secondary checkbox-xs" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="link link-hover text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        @if (Route::has('register'))
            <div class="text-sm text-gray-600 text-center mt-3">
                {{ __('Don\'t have an account?') }}
                <a class="link link-hover link-secondary text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}" wire:navigate>
                    {{ __('Register') }}
                </a>
            </div>
        @endif
    </form>
</div>
