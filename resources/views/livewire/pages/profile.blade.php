<div>
    <title>Profile</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="flex justify-between mb-4">
        <div>
            <h1 class="text-3xl font-bold"><i class="fa fa-user"></i> Profile</h1>
            <p class="text-sm">Update your account's profile information and email address.</p>
        </div>
    </div>
    {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6"> --}}
    <div class="flex flex-wrap items-start gap-10">
        <div class="flex flex-col gap-5">
            <div>
                <div class="card-body bg-base-100 rounded-badge max-w-md">
                    <livewire:layouts.profile.update-profile-information-form />
                </div>
            </div>
            <div class="card">
                <div class="card-body bg-base-100 rounded-badge max-w-md">
                    <livewire:layouts.profile.delete-user-form />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-base-100 rounded-badge max-w-md h-full">
                <livewire:layouts.profile.update-password-form />
            </div>
        </div>
    </div>
</div>
