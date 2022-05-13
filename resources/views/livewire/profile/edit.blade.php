<x-modal formAction="update_profile">
    <x-slot name="title">
        Edit Profile
    </x-slot>

    <x-slot name="content">
        <x-bk.form.input placeholder="Enter Name..." wire:model.defer='name' />
        <x-bk.form.input placeholder="Enter Password..." wire:model.defer='password' type="password" />

        <x-bk.form.input wire:model.defer='profilepic' type="file" />

        @error('profilepic')
            <p class="font-bold text-red-500">{{ $message }}</p>
        @enderror
    </x-slot>

    <x-slot name="buttons">
        <x-bk.button.regular wire:loading.remove>
            Update
        </x-bk.button.regular>

        <div wire:loading.block class="hidden">
            <x-bk.loading.loading-button />
        </div>

    </x-slot>
</x-modal>
