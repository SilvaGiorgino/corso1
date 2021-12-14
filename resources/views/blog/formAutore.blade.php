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
    {{ Form::selectInput('nationality', 'Nazionalità', ['Italia' => 'Italia', 'Inghilterra' => 'Inghilterra', 'Spagna' => 'Spagna', 'Francia' => 'Francia']) }}
    
    {{ Form::submitForm('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>
