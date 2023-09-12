<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>
    <div class="flex justify-center mt-4" >
        <livewire:show-room-component :rooms="$rooms" />
    </div>
</x-app-layout>
