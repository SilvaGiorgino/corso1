<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    {{ $scripts }}
    </head>
    <body>
        <h1>  {{ $title ?? 'Titolo di default' }}</h1>
        <div class="container mx-auto">

		  {{ $slot }}
        </div>  
    </body>
</html>