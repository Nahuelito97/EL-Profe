<div class="form-group">
    <label for="contraseña" class="control-label text-semibold">
        <h5>Nombre: <span class="text-danger">*</span></h5>
    </label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<h2 class="h3">Lista de permisos</h2>

@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach
