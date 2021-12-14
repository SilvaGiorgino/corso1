<div class="">
    {{ Form::label($name, $label, ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
    {{ Form::select($name, $value, array_merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'], $attributes)) }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>