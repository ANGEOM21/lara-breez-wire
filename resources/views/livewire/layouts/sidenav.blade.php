<div class="drawer-side z-50">
    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu w-72 p-3 h-full">
        <!-- Sidebar content here -->
        <div class="bg-gradient-to-b from-lime-500 to-lime-300 rounded-3xl min-h-full p-3">
            <div>
                <img src="https://placeimg.com/100/100/tech" alt="">
            </div>
            <li>
                <button
                    class=" {{ Request::segment(1) == 'dashboard' ? 'bg-base-300 font-bold' : '' }} rounded-full font-semibold capitalize hover:bg-zinc-300"
                    wire:navigate href="{{ route('dashboard') }}">
                    <i class="fa-duotone fa-solid fa-house"></i>
                    dashboard
                </button>
            </li>
            <div class="divider my-2"></div>
            @if (auth()->user()->role == 'admin')
                <div class="collapse collapse-arrow">
                    <input type="checkbox" class="peer"
                        {{ Request::segment(1) == 'user-management' || Request::segment(1) == 'profile' ? 'checked' : '' }} />
                    <div
                        class="collapse-title peer-checked:bg-base-300 text-sm font-semibold flex justify-between items-center">
                        Admin
                    </div>
                    <div class="collapse-content peer-checked:bg-base-300 flex">
                        <div class="divider m-0 divider-horizontal divider-solid"></div>
                        <ul class="w-full flex flex-col gap-2">
                            <li>
                                <button
                                    class="{{ Request::segment(1) == 'user-management' ? 'bg-zinc-300 font-bold' : '' }} rounded-full font-semibold capitalize hover:bg-zinc-400"
                                    wire:navigate href="{{ route('user-management') }}">
                                    <i class="fa fa-address-book"></i>
                                    User Management
                                </button>
                            </li>
                            <li>
                                <button
                                    class="{{ Request::segment(1) == 'profile' ? 'bg-zinc-300 font-bold' : '' }} rounded-full font-semibold capitalize hover:bg-zinc-400"
                                    wire:navigate href="{{ route('profile') }}">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <li>
                    <button
                        class=" {{ Request::segment(1) == 'profile' ? 'bg-base-300 font-bold' : '' }} rounded-full font-semibold capitalize hover:bg-zinc-300"
                        wire:navigate href="{{ route('profile') }}">
                        <i class="fa fa-user"></i>
                        Profile
                    </button>
                </li>
            @endif
        </div>
    </ul>
</div>
