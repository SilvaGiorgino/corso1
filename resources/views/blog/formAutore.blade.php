<x-layout>
    <x-slot name="scripts"></x-slot>
    <x-slot name="title">Inserisci un autore</x-slot>

    
    {{ Form::component('textInput', 'components.text', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('dateInput', 'components.date', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('submitForm', 'components.submit', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('selectInput', 'components.select', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}


    {!! Form::open(['url' => route('libreria.saveAuthor')]) !!}
    
    {{ Form::textInput('name','Nome') }}
    {{ Form::textInput('surname','Cognome') }}
    {{ Form::selectInput('nationality', 'Nazionalit√†', ['Italia' => 'Italia', 'Inghilterra' => 'Inghilterra', 'Spagna' => 'Spagna', 'Francia' => 'Francia', 'Germania' => 'Germania', 'Paesi Bassi' => 'Paesi Bassi', 'Portogallo' => 'Portogallo', 'USA' => 'USA']) }}
    {{ Form::dateInput('born','Data di nascita') }}

    {{ Form::submitForm('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>
