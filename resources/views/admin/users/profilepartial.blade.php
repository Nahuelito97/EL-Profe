<div class="row">
    <div class="col-lg-4">
        <div class="border-bottom text-center pb-4">
            <img src="{{ Auth::user()->image }}" alt="profile"
                class="img-lg rounded-circle mb-3" />
            <p><h5> {{ Auth::user()->roles->first()->name }}</h5></p>
        </div>

        <div class="py-4">
            <p class="clearfix">
                <span class="float-left">
                    Apellido
                </span>
                <span class="float-right text-muted">
                    {{ $user->surname }}
                </span>
            </p>
            <p class="clearfix">
                <span class="float-left">
                    Telefono
                </span>
                <span class="float-right text-muted">
                    {{ $user->phone }}
                </span>
            </p>
            <p class="clearfix">
                <span class="float-left">
                    Correo
                </span>
                <span class="float-right text-muted">
                    {{ $user->email }}
                </span>
            </p>
        </div>
    </div>
    <div class="col-lg-8 pl-lg-5">
        <div class="d-flex justify-content-between">
            <div>
                <h3>{{ $user->name }}</h3>
            </div>
        </div>
        <div class="profile-feed">
            <form action="{{ route('users.profile.update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name" class="control-label text-semibold">
                                    <h5>Nombre: <span class="text-danger">*</span>
                                    </h5>
                                </label>
                                <input type="name" name="name" class="form-control"
                                    id="name" placeholder="Enter name"
                                    value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label text-semibold">
                                    <h5>Email: <span class="text-danger">*</span>
                                    </h5>
                                </label>
                                <input type="email" name="email" class="form-control"
                                    id="email" placeholder="Enter email"
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label text-semibold">
                                    <h5>Contraseña: <span class="text-danger">*</span>
                                    </h5>
                                </label>
                                <input type="password" name="password"
                                    class="form-control" id="password"
                                    placeholder="Ingresa una contraseña">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="imagen" class="control-label text-semibold">
                                    <h5>Imagen: <span class="text-danger">*</span>
                                    </h5>
                                </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                        name="image" id="exampleInputFile">
                                    <label class="custom-file-label"
                                        for="exampleInputFile">Elije un archivo</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label text-semibold">
                                    <h5>Descripción: <span class="text-danger">*</span>
                                    </h5>
                                </label>
                                <textarea name="description" id="description" rows="5" class="form-control"
                                    placeholder="Ingresa una descripción para tu perfil">{{ $user->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col d-flex align-items-center justify-content-end">
                        <button type="reset" class="btn btn-info btn-rounded"
                            style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                            &nbsp;&nbsp;
                            Limpiar</button>
                        <button type="submit" class="btn btn-primary btn-rounded "><i
                                class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Actualizar</button>
                    </div>
                    <a type="button" class="btn btn-primary btn-rounded"
                        href="{{ route('users.index') }}">Volver</a>
                    <div>
            </form>
        </div>
    </div>
</div>
