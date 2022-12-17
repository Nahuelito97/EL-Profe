<div class="row">
    <div class="col-md-6">
        <div class="row invoice-info">
            <div class="col-sm-5 invoice-col">
                <address>
                    <b>Name:</b> {{ $studentss->name }}<br>
                    <b>Surname:</b> {{ $studentss->surname }}<br>
                    <b>DNI:</b> {{ $studentss->dni }}<br>
                    <b>DateOfBirth: </b> {{ date('d-m-Y', strtotime($studentss->date_of_birth)) }}<br>
                    <b>DateOfAdress:</b> {{ date('d-m-Y', strtotime($studentss->date_of_address)) }}<br>
                    <b>Country:</b> {{ $studentss->pais->name }} <br>
                    <b>Provincie:</b> {{ $studentss->provincies->name }}<br>
                    <b>Locality | CP:</b> {{ $studentss->localidad->name }} | {{ $studentss->localidad->cod_post }}<br>
                    <b>Direction:</b> {{ $studentss->localidad->name }} | {{ $studentss->localidad->cod_post }}<br>

                </address>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        {!! Form::model($studentss, ['route' => ['studentss.update', $studentss], 'method' => 'put']) !!}
        <div class="form-group"> {{-- Laravel Collective recomienda colocar los elementos como label e input dentro de un div de tipo form-group para la separación. --}}
            {!! Form::label('email', 'Email') !!} {{-- form control es de bootstrap y le da estilo al input. --}}
            {!! Form::text('email', null, [
                'class' => 'form-control',
                'placeholder' => 'Ingrese el correo nuevo correo electronico',
            ]) !!}

            @error('email')
                {{-- En caso de error de validación, enviamos un mensaje de error. --}}
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group"> {{-- Laravel Collective recomienda colocar los elementos como label e input dentro de un div de tipo form-group para la separación. --}}
            <div class="col-md-6">
                {!! Form::label('phone', 'Phone') !!} {{-- form control es de bootstrap y le da estilo al input. --}}
                {!! Form::text('phone', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nuevo numero de telefono',
                ]) !!}

                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        {!! Form::submit('Update Student', ['class' => 'btn btn-primary']) !!}
        <a class="btn btn-primary btn-rounded" href="{{ route('studentss.index') }}">Back</a>


        {!! Form::close() !!}
    </div>
</div>
