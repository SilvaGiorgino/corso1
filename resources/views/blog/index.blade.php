<x-layout>
    <x-slot name="scripts">
        <!-- Some JS and styles -->
    </x-slot>
    <x-slot name="title">
        Titolo di prova
    </x-slot>

    <div>My Page content is here</div>

    {!! Form::open(['url' => 'foo/bar']) !!}
    {{ Form::radio('category_id', 1) }}
    {{ Form::text('username'); }}
    {{  Form::select('size', ['L' => 'Large', 'S' => 'Small']) }}

{!! Form::close() !!}




    @foreach ($blogs as $blog)
    ----
        {{ $blog->title }}
        {!! Form::model($blog, ['url' => ['user.update', $blog->id]]) !!}
        {{ Form::text('title') }}

        {!! Form::close() !!}
    -----
        @endforeach
    <?php $message='ciao'; ?>
    <x-test type="error" :message="$message" class="mb-4"/>
    <x-chat/>
</x-layout>

