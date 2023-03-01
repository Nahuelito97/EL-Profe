<div class="card-body">
    <form method="POST" action="{{ route('cities.store') }}" class="formulario-crear">
        @csrf
        <div class="form-group">
            <label for="name" class="control-label text-semibold"><h6>Nombre:<span class="text-danger">*</span></h6></label>
            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Ingrese un nombre para la ciudad">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cod_post" class="control-label text-semibold"><h6>Codigo Postal:<span class="text-danger">*</span></h6></label>
            <input type="cod_post" name="cod_post" class="form-control @error('cod_post') is-invalid @enderror"
                id="cod_post" placeholder="Ingrese un codigo postal para la ciudad">
            @error('cod_post')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="from-group has-feedback">
            <label for="provincies_id" class="control-label text-semibold"><h6>Selecciona una Provincia :<span class="text-danger">*</span></h6></label>
            <select id="provincies_id" class="form-control @error('provincies_id') is-invalid @enderror"
                name="provincies_id" data-toggle="tooltip" data-placement="top" title="Select a Provincia">
                <option value="#" selected disabled>Todos..</option>
                @foreach ($provincias as $c)
                    @if (old('provincies_id') == $c->id)
                        <option value="{{ $c->id }}" selected>
                            {{ $c->name }}
                        </option>
                    @else
                        <option value="{{ $c->id }}">
                            {{ $c->name }}
                        </option>
                    @endif
                @endforeach
            </select>
            @error('provincies_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="row mt-2">
            <div class="col d-flex align-items-center justify-content-end">
                <button type="reset" class="btn btn-info btn-rounded" style="margin-right: 20px;"><i
                        class="zmdi zmdi-roller"></i>
                    &nbsp;&nbsp;
                    Limpiar</button>
                <button type="submit" class="btn btn-primary btn-rounded "><i class="zmdi zmdi-floppy"></i>
                    &nbsp;&nbsp; Registrar
                    Provincias</button>
            </div>
            <a type="button" class="btn btn-primary btn-rounded" href="{{ route('cities.index') }}">Volver</a>
            <div>
    </form>

</div>
