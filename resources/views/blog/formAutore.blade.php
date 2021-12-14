<div class="flex gap-2 justify-center p-4 text-gray-600 font-medium">
        <a href="{{ route('libreria.index') }}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100"> Home</a>
        <a href="{{ route('libreria.formAutore')}}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100">Aggiungi autore</a>
        <a href="{{ route('libreria.formLibro')}}" class="px-4 py-2 rounded-md bg-white transition-colors hover:bg-gray-100">Aggiugni libro</a>
    </div>

<x-layout>
    <x-slot name="scripts"></x-slot>
    <x-slot name="title">Inserisce un autore</x-slot>

    
    {{ Form::component('textInput', 'components.text', ['name', 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('dateInput', 'components.date', ['name', 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('submitForm', 'components.submit', ['name', 'value'=>null, 'attributes'=>[]]); }}



    {!! Form::open(['url' => route('libreria.index')]) !!}
    
    {{ Form::textInput('Nome') }}
    {{ Form::textInput('Cognome') }}
    {{ Form::dateInput('Data di nascita') }}
   
    {{ Form::submitForm('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>