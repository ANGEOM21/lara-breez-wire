<x-layouts.base>
    @if (in_array(request()->route()->getName(), ['dashboard', 'user-management', 'profile']))
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <!-- Navbar -->
                @include('livewire.layouts.topbar')
                <!-- Page content here -->
                <main class="container p-4">
                    {{ $slot }}
                </main>
            </div>
            <!-- Sidebar content here -->
            @include('livewire.layouts.sidenav')
        </div>
    @else
        <div class="min-h-screen flex flex-col justify-center items-center pt-2 sm:pt-0 bg-slate-200">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-16 h-16 drop-shadow fill-current text-gray-500" />
                </a>
            </div>
            <div class="w-full card sm:max-w-md mt-6 glass shadow-xl lg:rounded-badge overflow-hidden ">
                {{ $slot }}
            </div>
        </div>
    @endif
</x-layouts.base>
