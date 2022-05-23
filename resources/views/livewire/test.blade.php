<div>
    <div class="mt-5"></div>
    <x-button onclick="$openModal('myModa')" label="Default" type="submit" />
    <x-notifications />
    {{-- <x-modal blur wire:model.defer="myModa" max-width="6xl">
        <div class="dark:text-white bg-black p-4 rounded text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat autem culpa laboriosam nemo fugiat quod,
            magnam odio tenetur libero vitae quia aliquam molestias vel architecto maiores assumenda quibusdam quaerat
            sed!
            Temporibus iure esse cupiditate rem doloremque quos commodi similique necessitatibus? Voluptas commodi modi,
            excepturi et maiores sapiente doloribus minus non, ullam voluptatibus enim rerum assumenda! Corporis dicta
            consequuntur non quo inventore doloribus, nostrum quasi at quaerat, ducimus eveniet soluta dignissimos
            repellendus illo est eum sint velit quam minus molestias natus. Vel, adipisci assumenda vitae natus esse
            sint,
            nostrum dolore ducimus quia aperiam labore alias iure laborum quae totam ad quaerat!
        </div>
    </x-modal> --}}

    <x-button wire:click="test" label="Test" />
<livewire:users />


</div>
