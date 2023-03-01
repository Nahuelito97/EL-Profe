<div class="card-body">
    <form class="" method="post"
        action="{{ route('cities.update', $localidades) }}">

        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="col-lg-12">
            <div class="form-group has-feedback">
                <label for="name"><h6>Nombre:<span class="text-danger">*</span></h6></label>
                <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name', $localidades->name) }}"
                    autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="cod_post"><h6>Codigo Postal:<span class="text-danger">*</span></h6></label>
                <input id="cod_post" type="text"
                    class="form-control @error('cod_post') is-invalid @enderror"
                    name="cod_post"
                    value="{{ old('cod_post', $localidades->cod_post) }}"
                    autocomplete="cod_post" autofocus>
                @error('cod_post')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="from-group has-feedback">
                <label for="provincies_id"
                    class="control-label text-semibold"><h6>Selecciona una Provincia :<span class="text-danger">*</span></h6></label>
                <select id="provincies_id"
                    class="form-control @error('provincies_id') is-invalid @enderror"
                    name="provincies_id" data-toggle="tooltip"
                    data-placement="top" title="Select a Provincia">
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
        </div>


        <hr>
        <div class="col-xs-12">
            <p class="text-center">
                <button type="submit" class="btn btn-primary btn-rounded"><i
                        class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;
                    Guardar</button>
                <a class="btn btn-primary btn-rounded"
                    href="{{ route('cities.index') }}">Volver</a>
            </p>
        </div>

    </form>
</div>
