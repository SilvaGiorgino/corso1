<div class="flex gap-2 justify-center p-4 text-gray-600 font-medium">
        <a href="{{ route('libreria.index') }}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100"> Home</a>
        <a href="{{ route('libreria.formAutore')}}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100">Aggiungi autore</a>
        <a href="{{ route('libreria.formLibro')}}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100">Aggiungi libro</a>
    </div>

<x-layout>
    <x-slot name="scripts"></x-slot>
    <x-slot name="title">Inserisci un autore</x-slot>

    
    {{ Form::component('textInput', 'components.text', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('dateInput', 'components.date', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('submitForm', 'components.submit', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('selectInput', 'components.select', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}


    {!! Form::open(['url' => route('libreria.indexPost')]) !!}
    
    {{ Form::textInput('name','Nome') }}
    {{ Form::textInput('surname','Cognome') }}
    {{ Form::dateInput('born','Data di nascita') }}
    {{ Form::selectInput('nationality', 'Nazionalità', ['Italia' => 'Italia', 'Spagna' => 'Spagna', 'Francia' => 'Francia']) }}
    
    {{ Form::submitForm('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>