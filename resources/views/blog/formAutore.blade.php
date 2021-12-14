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