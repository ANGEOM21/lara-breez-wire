<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-32 p-2 mt-2 shadow">
    <li>
        <button class="normal-case" wire:click="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </button>
    </li>
</ul>
