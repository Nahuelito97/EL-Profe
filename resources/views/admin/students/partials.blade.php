<div class="card-body">
    <form method="POST" action="{{ route('studentss.store') }}" class="formulario-crear">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="control-label text-semibold">
                            <h5>Nombre: <span class="text-danger">*</span>
                            </h5>
                        </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Ingrese un nombre para el alumno">
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
                            id="phone" placeholder="Ingrese el número de telefono del alumno">
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
                            id="dni" placeholder="Ingrese el dni del alumno">
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
                            id="surname" placeholder="Ingrese un apellido para el alumno">
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
                            id="email" placeholder="Ingrese un correo electronico para el alumno">
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
                            placeholder="Ingrese la fecha de nacimiento del alumno">
                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="from-group">
                <label for="pais_id" class="control-label text-semibold">
                    <h5>Selecciona un País:<span class="text-danger">*</span></h5>
                </label>
                <select id="pais_id" class="form-control @error('pais_id') is-invalid @enderror" name="pais_id"
                    data-toggle="tooltip" data-placement="top" title="Selecciona un País">
                    <option value="#" selected disabled>Todos..
                    </option>
                    @foreach ($country as $c)
                        @if (old('pais_id') == $c->id)
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
                @error('pais_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div class="from-group has-feedback">
                <label for="provincies_id" class="control-label text-semibold">
                    <h5>Selecciona una Provincia:<span class="text-danger">*</span></h5>
                </label>
                <select id="provincies_id" class="form-control @error('provincies_id') is-invalid @enderror"
                    name="provincies_id" data-toggle="tooltip" data-placement="top" title="">
                    <option value="#" selected disabled>Todos</option>
                    @foreach ($province as $prov)
                        @if (old('provincies_id') == $prov->id)
                            <option value="{{ $prov->id }}" seleprovted>
                                {{ $prov->name }}
                            </option>
                        @else
                            <option value="{{ $prov->id }}">
                                {{ $prov->name }}
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
            <div class="from-group has-feedback">
                <label for="provincies_id" class="control-label text-semibold">
                    <h5>Selecciona una Localidad:<span class="text-danger">*</span></h5>
                </label>
                <select id="localities_id" class="form-control @error('localities_id') is-invalid @enderror"
                    name="localities_id" data-toggle="tooltip" data-placement="top" title="">
                    <option value="#" selected disabled>Todos.
                    </option>
                    @foreach ($localities as $loc)
                        @if (old('localities_id') == $loc->id)
                            <option value="{{ $loc->id }}" selected>
                                {{ $loc->name }}
                            </option>
                        @else
                            <option value="{{ $loc->id }}">
                                {{ $loc->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
                @error('localities_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div class="from-group has-feedback">
                <label for="provincies_id" class="control-label text-semibold">
                    <h5>Selecciona una Direccion:<span class="text-danger">*</span></h5>
                </label>
                <select id="directions_id" class="form-control @error('directions_id') is-invalid @enderror"
                    name="directions_id" data-toggle="tooltip" data-placement="top" title="">
                    <option value="#" selected disabled>Todos.
                    </option>
                    @foreach ($directions as $dir)
                        @if (old('directions_id') == $dir->id)
                            <option value="{{ $dir->id }}" selected>
                                {{ $dir->name }}
                            </option>
                        @else
                            <option value="{{ $dir->id }}">
                                {{ $dir->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
                @error('directions_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
        <div class="col-xs-12">
            <p class="text-center">
                <button type="reset" class="btn btn-info btn-rounded" style="margin-right: 20px;"><i
                        class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                    Limpiar</button>
                <button type="submit" class="btn btn-success btn-rounded"><i class="zmdi zmdi-floppy"></i>
                    &nbsp;&nbsp;
                    Registrar Alumno</button>
                <a class="btn btn-primary btn-rounded" href="{{ route('studentss.index') }}">Volver</a>
            </p>
        </div>

    </form>

</div>
