<x-layout title="{{ config('app.name') }}">
    <main id="index">
        <x-header />
        @include('partials.nps')
        @include('partials.graphs')

        @if (session('wallet') && session('wallet') !== '')
            @include('partials.wallet')
        @else
            @include('partials.wallet-form')
        @endif
    </main>
</x-layout>
