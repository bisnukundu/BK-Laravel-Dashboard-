@props(['formAction' => false])

<div>
    @if ($formAction)
        <form enctype="multipart/form-data" wire:submit.prevent="{{ $formAction }}">
    @endif
    <div class="bg-white dark:bg-gray-900 dark:text-gray-200 p-4 sm:px-6 sm:py-4 border-b border-gray-150">
        @if (isset($title))
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-200">
                {{ $title }}
            </h3>
        @endif
    </div>
    <div class="bg-white px-4 sm:p-6 dark:bg-gray-900 dark:text-gray-200">
        <div class="space-y-6">
            {{ $content }}
        </div>
    </div>

    <div class="bg-white px-4 pb-5 sm:px-4 sm:flex dark:bg-gray-900 dark:text-gray-200">
        {{ $buttons }}
    </div>
    @if ($formAction)
        </form>
    @endif
</div>
