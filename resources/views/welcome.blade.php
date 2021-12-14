<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
    <div class="flex gap-2 justify-center p-4 text-gray-600 font-medium">
        <a href="{{ route('libreria.index') }}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100"> Home</a>
        <a href="{{ route('libreria.formAutore')}}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100">Aggiungi autore</a>
        <a href="{{ route('libreria.formLibro')}}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100">Aggiugni libro</a>
    </div>
    <div class="container mx-auto p-4">
        <div class="rounded-md p-8 bg-yellow-100">
            <h1 class="mb-4 font-bold text-blue-800 text-4xl">Pagina di benvenuto</h1>
            <p class="leading-relaxed text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Elenco libri -->
        <h3 class="mt-8 font-bold text-gray-400 uppercase">Elenco dei libri</h3>
        <div class="my-4 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col gap-y-4 rounded-md border border-gray-200 transition-shadow hover:shadow-md p-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">Titolo del libro</h3>
                    <span class="bg-gray-100 px-3 py-1 rounded-md text-sm font-medium text-gray-600">2021</span>
                </div>
                <div class="flex gap-2 flex-wrap">
                    <span class="border text-sm px-3 py-1 rounded-full">100 pagine</span>
                    <span class="bg-yellow-200 text-sm px-3 py-1 rounded-full">Genere 1</span>
                    <span class="bg-yellow-200 text-sm px-3 py-1 rounded-full">Genere 2</span>
                    <span class="bg-yellow-200 text-sm px-3 py-1 rounded-full">Genere 3</span>
                </div>
            </div>
        </div>

        <!-- Elenco autori -->
        <h3 class="mt-8 font-bold text-gray-400 uppercase">Elenco degli autori</h3>
        <div class="my-4 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col gap-y-4 rounded-md border border-gray-200 transition-shadow hover:shadow-md p-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">Nome Cognome</h3>
                    <!--<span class="bg-gray-100 px-3 py-1 rounded-md text-sm font-medium text-gray-600">2021</span>-->
                </div>
                <div class="flex gap-2 flex-wrap">
                    <span class="bg-blue-200 text-sm px-3 py-1 rounded-full">Nazionalità</span>
                    <span class="border text-sm px-3 py-1 rounded-full">Data di nascita</span>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    <!--Note-->
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget accumsan justo, eu rutrum quam. In molestie ligula at ultricies luctus. In auctor ipsum ante, a elementum ligula commodo in.
                </p>
            </div>
        </div>
    </div>
</body>

</html>