<x-layout title="{{ config('app.name') }}">
    <main id="index">
    <x-header/>
        @include('partials.nps')
        @include('partials.graphs')
    </main>
</x-layout>
