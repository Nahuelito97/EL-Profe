@if (isset($studentss))
    <div class="row">
        <div class="col-md-2">
            <p class="h5">Name:</p>
            <p class="form-control">{{ $studentss->name }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                {!! htmlspecialchars_decode(Form::label('estado_id', 'Estado <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                {{ Form::select('estado_id', $asistencias, $studentss->estado_id ?? null, ['id' => 'estado_id', 'class' => 'form-control']) }}
                @error('Estado')
                    <span class="text-danger text-error">{{ $message }}</span>
                @enderror
                {!! Form::submit('Cambiar Asistencia', ['class' => 'btn btn-primary mt-2']) !!}
            </div>
        </div>
    </div>
@endif
