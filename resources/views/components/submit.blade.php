<div class="mt-8">
    {{ Form::submit('Invia', array_merge(['class' => 'appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'], $attributes)); }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>