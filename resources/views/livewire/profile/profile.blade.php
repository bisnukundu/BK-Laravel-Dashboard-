<div>
    <x-slot name="title">User Profile</x-slot>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Profile
    </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-3">
        <x-card cardClasses="text-center">
            <img @if ($user->profile_img) src="{{ asset('storage/' . $user->profile_img) }}"
                @else
                src="{{ asset('images/profile/profile_avater.png') }}" @endif
                alt="profile_img" class="rounded-full w-28 h-28 m-auto">
            <p class="font-bold text-center mt-2">{{ $user->name }}</p>

            {{-- Edit Button --}}
            <x-button.circle icon="pencil-alt" class="mt-3 text-white" onclick="$openModal('profileEditModal')" />

            {{-- Edit profile Modal --}}
            <x-modal.card title="Edit Profile" wire:model.defer="profileEditModal">
                <div class="space-y-3">
                    <x-input label="Name" placeholder="Enter Name..." wire:model.defer='name' />
                    <x-input label="Password" placeholder="Enter Password..." wire:model.defer='password'
                        type="password" />
                    <x-input label="Profile Image" wire:model.defer='profilepic' type="file" />
                    @if ($profilepic)
                        <img src="{{ $profilepic->temporaryUrl() }}" alt="Profile"
                            class="rounded-full w-28 h-28 mx-auto">
                    @endif
                </div>
                <x-slot name="footer">
                    <div class="flex justify-between">
                        <x-button label="Cancel" x-on:click="close" />
                        <x-button label="Update" type="submit" class="m-l" purple x-on:click="close"
                            wire:click="profile_update" />
                    </div>
                </x-slot>
            </x-modal.card>
        </x-card>


        <x-card cardClasses="md:col-span-2">
            <p class="font-bold">Information</p>
            <hr class="mb-5">
            <div class="grid grid-cols-2">
                <div class="space-y-2">
                    <b>Name</b>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="space-y-2">
                    <b>Email</b>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
        </x-card>

    </div>

</div>
