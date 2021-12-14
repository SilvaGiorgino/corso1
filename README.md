Campi Autore

CodAutore(ID autoincrementale)
Nome
Cognome
Nazionalità
Data di Nascita



Campi libri
ISBN('ID autoincrementale')
Nome Libro
Casa editrice
Numero Pagine
Anno Pubblicazione
Genere


Per eseguire le migrazioni:      php artisan migrate

""<div class="">
    @error($name)
    <div class="alert alert-danger">{{$message}}</div>
@enderror
    {{ Form::label($name, $nameSHOW, ['class'=> '']) }}<br>
    {{ Form::text($name, $value, array_merge(['class'=>''], $attributes)) }}
</div>""
