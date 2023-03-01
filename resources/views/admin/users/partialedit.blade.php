<div class="col-md-12 card-body pt-3">
    <div class="card_layout pt-3">
        <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
            <h4>
                Editar usuario | Asignar Roles
            </h4>
        </div>
        <div class="card-body col-md-11 mx-auto px-0 ">
            {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
            <div class="row">
                <div class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                    <div class="form-group">
                        <label for="name">
                            <p class="h5">Name:</p>
                        </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $user->name) }}" placeholder="Nombre del Usuario">
                        @error('name')
                            <span class="text-danger text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="surname">
                            <p class="h5">Surname: </span></p>
                        </label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                            value="{{ old('surname', $user->surname) }}" placeholder="Apellido del Usuario">
                        @error('surname')
                            <span class="text-danger text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">
                            <p class="h5">Email: </p>
                        </label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $user->email) }}" placeholder="Apellido del Usuario">
                        @error('email')
                            <span class="text-danger text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">
                            <p class="h5">Telefono: </p>
                        </label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone', $user->phone) }}" placeholder="Apellido del Usuario">

                        @error('phone')
                            <span class="text-danger text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dni">
                            <p class="h5">Dni: </p>
                        </label>
                        <input type="text" name"dni" id="dni"
                            class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni', $user->dni) }}"
                            placeholder="Apellido del Usuario">
                        @error('dni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth">
                            <p class="h5">Fecha de Nacimiento: </p>
                        </label>
                        <input type="date" name"date_of_birth" id="date_of_birth"
                            class="form-control @error('date_of_birth') is-invalid @enderror"
                            value="{{ old('date_of_birth', $user->date_of_birth) }}"
                            placeholder="Apellido del Usuario">
                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($roles as $role)
        <div>
            <label>
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                {{ $role->name }}
            </label>
        </div>
    @endforeach
    <div class="col-xs-12">
        <p class="text-center">
            {!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary btn-rounded']) !!}
            {!! Form::close() !!}
            <a class="btn btn-primary btn-rounded" href="{{ route('users.index') }}">Volver</a>
        </p>
    </div>
</div>
