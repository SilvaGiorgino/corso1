<div class="mt-8">
    {{ Form::submit('Invia', array_merge(['class' => 'appearance-none rounded-mdw-full py-4 px-3 bg-blue-800 text-blue-50 font-medium leading-tight focus:outline-none focus:shadow-outline'], $attributes)); }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>