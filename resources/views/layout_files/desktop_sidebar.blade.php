<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            BK L-Dashboard
        </a>
        <ul class="mt-6">
            <x-menu-item active="true" label="Dashboard" icon="home" route="https://stackoverflow.com/"
                target="_blank" />

        </ul>
        <ul>
            <x-menu-item label="Form" icon="clipboard-list" route="https://stackoverflow.com/" target="_blank" />
            <x-menu-item label="Check" icon="check" route="https://stackoverflow.com/" target="_blank" />
            <x-menu-item label="Calculator" icon="calculator" route="https://stackoverflow.com/" target="_blank" />
            <x-menu-item label="Chat" icon="chat" route="https://stackoverflow.com/" target="_blank" />
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
    </div>
</aside>
