<x-layout title="{{ config('app.name') }}">
    <main id="index">
        <x-header />
        @include('partials.nps')
        @include('partials.graphs')

        @if (session('wallet') && session('wallet') !== '')
            @include('partials.wallet')
            <script>
                const wallet = "{{ session('wallet') }}";
            </script>
            @vite(['resources/js/wallet.js'])
        @else
            @include('partials.wallet-form')
        @endif
    </main>
</x-layout>
