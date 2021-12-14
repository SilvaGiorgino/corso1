<x-layout>
    <x-slot name="scripts"></x-slot>
    <x-slot name="title">Inserisci un libro</x-slot>

    {{ Form::component('textInput', 'components.text', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('dateInput', 'components.date', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('numberInput', 'components.number', ['name', 'label'=>null, 'value'=>null, 'attributes'=>['min'=>1]]); }}
    {{ Form::component('selectInput', 'components.select', ['name', 'label'=>null, 'value'=>null, 'attributes'=>[]]); }}
    {{ Form::component('submitForm', 'components.submit', ['name', 'value'=>null, 'attributes'=>[]]); }}



    {!! Form::open(['url' => route('libreria.indexPost')]) !!}
    
    {{ Form::textInput('name', 'Nome') }}
    {{ Form::textInput('genre', 'Genere') }}
    {{ Form::numberInput('nPage', 'Numero pagine') }}
    {{ Form::dateInput('release','Anno Pubblicazione') }}
    {{ Form::selectInput('homeEditor', 'Casa editrice', ['Mondadori' => 'Mondadori', 'Bompiani' => 'Bompiani', 'Hoepli' => 'Hoepli', 'Chiarelettere' => 'Chiarelettere', 'Cairo Editore' => 'Cairo Editore', 'Rizzoli' => 'Rizzoli', 'De Agostini Editore' => 'De Agostini Editore', 'Feltrinelli Editore' => 'Feltrinelli Editore']) }}
   
    {{ Form::submitForm('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>
