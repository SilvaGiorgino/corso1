<div class="m-4">
    {{ Form::label($name, null, ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
    {{ Form::date('name', \Carbon\Carbon::now(), array_merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'], $attributes)); }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>