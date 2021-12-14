<div class="">
    {{ Form::label($name, null, ['class' => '']) }}
    {{ Form::select($name, $value, array_merge(['class' => ''], $attributes)) }}
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>