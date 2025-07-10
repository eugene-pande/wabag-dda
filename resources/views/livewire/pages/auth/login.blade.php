<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div class="space-y-6">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" class="space-y-5">
        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email Address')" class="block text-sm font-medium text-gray-700 mb-1"/>
            <x-text-input wire:model="form.email" id="email"
                        class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-wabag-yellow focus:border-wabag-yellow transition"
                        type="email"
                        name="email"
                        required
                        autofocus
                        placeholder="Enter your admin email" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-1 text-sm text-red-600" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700 mb-1" />
            <x-text-input wire:model="form.password" id="password"
                        class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-wabag-yellow focus:border-wabag-yellow transition"
                        type="password"
                        name="password"
                        required
                        placeholder="Enter your password" />
            <x-input-error :messages="$errors->get('form.password')" class="mt-1 text-sm text-red-600" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between mt-3">
            <div class="flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                       class="h-4 w-4 rounded border-gray-300 text-wabag-yellow focus:ring-wabag-yellow">
                <label for="remember" class="ml-2 block text-sm text-gray-700">{{ __('Remember me') }}</label>
            </div>

            @if (Route::has('password.request'))
                <a class="text-sm text-wabag-green hover:text-wabag-black transition"
                   href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div class="mt-3">
            <button type="submit"
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-wabag-green hover:bg-wabag-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-wabag-yellow transition-colors">
                {{ __('Log In') }}
            </button>
        </div>
    </form>

    <!-- Admin Notice -->
    <div class="mt-6 p-4 bg-wabag-light rounded-lg border-l-4 border-wabag-yellow">
        <div class="flex items-start">
            <svg class="h-5 w-5 text-wabag-yellow mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            <div class="flex-1">
                <p class="text-sm text-gray-600 mb-3">This portal is restricted to authorized Wabag DDA administrators only.</p>
            </div>
        </div>
    </div>
    <div class="flex-1">
        <a href="/" class="inline-flex items-center text-sm text-wabag-green hover:text-wabag-black transition-colors" wire:navigate>
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Site
        </a>
    </div>
</div>
