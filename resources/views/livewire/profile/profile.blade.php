<div>
    <x-slot name="title">User Profile</x-slot>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Profile
    </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-3">
        <div class="min-w-0 p-4  dark:text-gray-200 dark:bg-gray-800 bg-white rounded-lg shadow text-center">
            <img @if ($user->profile_img) src="{{ asset('storage/' . $user->profile_img) }}"
                @else
                src="{{ asset('images/profile/profile_avater.png') }}" @endif
                alt="profile_img" class="rounded-full w-28 h-28 m-auto">
            <p class="font-bold text-center mt-2">{{ $user->name }}</p>

            <button class="mt-3"
                onclick="Livewire.emit('openModal','profile.edit',{{ json_encode(['user' => $user]) }})">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                    <path fill-rule="evenodd"
                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

        </div>

        <div class="min-w-0 p-4 md:col-span-2 bg-white rounded-lg shadow dark:text-gray-200 dark:bg-gray-800 ">
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
        </div>
    </div>

</div>
