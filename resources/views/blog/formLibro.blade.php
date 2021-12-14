<x-layout>
    <x-slot name="scripts"></x-slot>
    <x-slot name="title">Inserisci un libro</x-slot>

    {{ Form::component('textInput', 'components.text', ['name', 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('dateInput', 'components.date', ['name', 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('submitForm', 'components.submit', ['name', 'value'=>null, 'attributes'=>[]]); }}



    {!! Form::open(['url' => route('libreria.index')]) !!}
    
    {{ Form::textInput('Nome') }}
    {{ Form::textInput('Edizione') }}
    {{ Form::dateInput('Anno Pubblicazione') }}
   
    {{ Form::submitForm('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>
