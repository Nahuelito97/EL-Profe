<div class="card-body">
    <form method="POST" action="{{ route('users.store') }}"
        class="formulario-crear">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="control-label text-semibold">
                        <h5>Nombre: <span class="text-danger">*</span>
                        </h5>
                    </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Ingrese un nombre para el usuario">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="control-label text-semibold">
                        <h5>Telefono:<span class="text-danger">*</span>
                        </h5>
                    </label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        id="phone" placeholder="Ingrese el número de telefono del usuario">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dni" class="control-label text-semibold">
                        <h5>Dni:<span class="text-danger">*</span></h5>
                    </label>
                    <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror"
                        id="dni" placeholder="Ingrese el dni del usuario">
                    @error('dni')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="surname" class="control-label text-semibold">
                        <h5>Apellido:<span class="text-danger">*</span>
                        </h5>
                    </label>
                    <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                        id="surname" placeholder="Ingrese un apellido para el usuario">
                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="control-label text-semibold">
                        <h5>Email:<span class="text-danger">*</span>
                        </h5>
                    </label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="Ingrese un correo electronico para el usuario">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date_of_birth" class="control-label text-semibold">
                        <h5>Fecha de Nacimiento:<span class="text-danger">*</span></h5>
                    </label>
                    <input type="date" name="date_of_birth"
                        class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth"
                        placeholder="Ingrese la fecha de nacimiento del usuario">
                    @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="contraseña" class="control-label text-semibold">
                <h5>Contraeña: <span class="text-danger">*</span></h5>
            </label>
            <input type="password" name="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password" placeholder="Ingrese la conraseña del usuario">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row mt-2">
            <div class="col d-flex align-items-center justify-content-end">
                <button type="reset" class="btn btn-info btn-rounded"
                    style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                    &nbsp;&nbsp;
                    Limpiar</button>
                <button type="submit" class="btn btn-primary btn-rounded "><i
                        class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar
                    Usuario</button>
            </div>
            <a type="button" class="btn btn-primary btn-rounded"
                href="{{ route('users.index') }}">Volver</a>
            <div>
    </form>

</div>
