<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{ $scripts }}
</head>

<body>
    <x-menu />
    <div class="container mx-auto p-4">
        <h1 class="mb-4 text-2xl text-blue-800 font-bold"> {{ $title ?? 'Titolo di default' }}</h1>
        {{ $slot }}
    </div>
</body>

</html>