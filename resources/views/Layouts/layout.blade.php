<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('/storage/favicon/favicon.png') }}" type="image/x-icon">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/js/app.js', 'resources/styles/styles.scss'])

    <script>
        const baseAPI = "{{ config('coin.baseURL') }}/{{ config('coin.poolName') }}";
    </script>
</head>

<body>
    <x-nav />
    {{ $slot }}
</body>

</html>
