<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la provincia']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <input id="pais_id" type="text" class="form-control @error('pais_id') is-invalid @enderror text-center"
        name="pais_id" value="{{ $provincias->pais->name }}" autocomplete="pais_id" disabled="disabled" autofocus>
    @error('pais_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
