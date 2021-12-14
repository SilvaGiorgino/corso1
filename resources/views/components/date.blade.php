<div class="my-4">
    {{ Form::label($name, $label, ['class' => 'block text-slate-500 text-sm uppercase font-bold mb-2']) }}
    {{ Form::date('name', \Carbon\Carbon::now(), array_merge(['class' => 'appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'], $attributes)); }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>