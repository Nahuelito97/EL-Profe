<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la especilidad']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
