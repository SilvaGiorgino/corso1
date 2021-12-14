<div class="mt-8">
    {{ Form::submit('Invia', array_merge(['class' => 'cursor-pointer appearance-none rounded w-full py-4 px-3 bg-blue-800 text-blue-100 font-medium leading-tight transition-colors hover:bg-blue-600 hover:text-blue-50 focus:outline-none focus:shadow-outline'], $attributes)); }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>