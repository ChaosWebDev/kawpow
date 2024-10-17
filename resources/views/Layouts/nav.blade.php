<nav>
    <div class="container">
        <x-link href='/' icon="fa fa-home">Home</x-link>
        <x-link href='/connect' icon='fa fa-rocket'>Start</x-link>
        <x-link href='/blocks' icon='fa fa-cubes'>Blocks</x-link>
        <x-link href='/payments' icon='nf nf-md-currency_sign'>Payments</x-link>

        <div class="relative" x-data="{ open: false }">
            <z @click="open = !open" @click.away="open = false" class="dropdown-toggle">
                <i class="nf nf-fa-link"></i>
                <span class="text">Links</span>
            </z>

            <div x-show="open" class="dropdown-menu" @click.away="open = false" x-transition>
                @foreach (config('coin.external') as $name=>$link)
                    <a href='{{ $link }}'>{{ ucfirst($name) }}</a>
                @endforeach
            </div>
        </div>

        <div class="relative" x-data="{ open: false }">
            <z @click="open = !open" @click.away="open = false" class="dropdown-toggle">
                <i class="nf nf-cod-server"></i>
                <span class="text">Pools</span>
            </z>

            <div x-show="open" class="dropdown-menu" @click.away="open = false" x-transition>
                @foreach (config('coins') as $symbol => $data)
                    @php($url = "storage/coins/{$data['icon']}")

                    <a href="{{ $data['url'] }}">
                        <img src="{{ asset($url) }}" alt="{{ $symbol }}">
                        <span class="text">{{ $data['name'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
