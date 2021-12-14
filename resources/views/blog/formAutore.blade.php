<x-layout>
    <x-slot name="scripts"></x-slot>
    <x-slot name="title">Inserisci un libro</x-slot>

    {{ Form::component('textInput', 'components.text', ['name', 'value'=>null, 'attributes'=>[]]); }}

    {!! Form::open(['url' => route('libreria.index')]) !!}
    
    {{ Form::textInput('nome') }}
   
    {{ Form::submit('Invio'); }}
    
    {!! Form::close() !!}
</x-layout>
