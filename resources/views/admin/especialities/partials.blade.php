<div class="card">
                                                    
    <form action="{{ route('especialities.store') }}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="name" class="control-label text-semibold">
                    <h5>Nombre: <span class="text-danger">*</span>
                    </h5>
                </label>
                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Ingrese un nombre para la ciudad">
                @error('name')
                    <span class="invalid-feedback"
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="control-label text-semibold">
                    <h5>Descripción: <span class="text-danger">*</span>
                    </h5>
                </label>                <textarea name="description" id="description" rows="4" class="form-control @error('provincies_id') is-invalid @enderror"
                    placeholder="Ingrese la descripción para la especialidad"></textarea>

                    @error('description')
                    <span class="invalid-feedback"
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row mt-2">
                <div class="col d-flex align-items-center justify-content-end">
                    <button type="reset" class="btn btn-info btn-rounded"
                        style="margin-right: 20px;"><i
                            class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                        Limpiar</button>
                    <button type="submit" class="btn btn-primary btn-rounded "><i
                            class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; + Registrar
                        Especialidad    </button>
                </div>
                <a type="button" class="btn btn-primary btn-rounded"
                href="{{ route('especialities.index') }}">Volver</a>
            <div>
        </div>

        
    </form>
</div>