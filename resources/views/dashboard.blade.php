<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            イベントカレンダー
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="event-calendar mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('calendar')
            </div>
        </div>
    </div>
    <script src="{{ mix('js/flatpickr.js')}}"></script>
</x-app-layout>
