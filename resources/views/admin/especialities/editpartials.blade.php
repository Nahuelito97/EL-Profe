<div class="card">
    <form class="" method="post" action="{{ route('especialities.update', $especialities) }}">

        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="card-body">
            <div class="form-group">
                <label for="name" class="control-label text-semibold">
                    <h5>Nombre: <span class="text-danger">*</span>
                    </h5>
                </label>

                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="name" placeholder="Ingrese un nombre para la ciudad" value="{{ $especialities->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="control-label text-semibold">
                    <h5>Nombre: <span class="text-danger">*</span>
                    </h5>
                </label>
                <textarea name="description" id="description" rows="4" class="form-control"
                    placeholder="Ingrese una descripción para la categoría"> {{ $especialities->description }} </textarea>
            </div>
            <div class="row mt-2">
                <div class="col d-flex align-items-center justify-content-end">
                    <button type="reset" class="btn btn-info btn-rounded"
                        style="margin-right: 20px;"><i
                            class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                        Limpiar</button>
                    <button type="submit" class="btn btn-primary btn-rounded "><i
                            class="zmdi zmdi-floppy"></i>Actualizar Especialidad</button>
                </div>
                <a type="button" class="btn btn-primary btn-rounded"
                href="{{ route('especialities.index') }}">Volver</a>
            <div>
        </div>
    </form>
</div>
