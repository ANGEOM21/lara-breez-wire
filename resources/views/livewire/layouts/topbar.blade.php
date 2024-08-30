<div class="navbar w-full p-3 sticky top-0 z-50">
    <div class="flex-none lg:hidden">
        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block h-6 w-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
    </div>
    <div class="flex-1 px-4 justify-between bg-gradient-to-r from-lime-500 to-lime-300 rounded-full py-2">
        <label class="input input-bordered flex items-center gap-2 h-9 rounded-full">
            <input type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                <path fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
            </svg>
        </label>
        <div class="flex items-center justify-center gap-3 dropdown dropdown-bottom dropdown-end">
            <span class="text-lg font-semibold hidden lg:block">
                {{ Str::before(auth()->user()->name, ' ') }}
            </span>
            <div tabindex="0" role="button" class="normal-case avatar btn btn-ghost btn-circle ">
                <div class="w-10 rounded-full flex">
                    <div class="bg-base-300 h-10 w-10 flex items-center justify-center">
                        <i class="fa-solid fa-user text-xl text-slate-500"></i>
                    </div>
                </div>
            </div>
            <livewire:components.logout />
        </div>

    </div>
</div>
