@extends('layouts.app')

@section('body-class','landing-page')


@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.students.section')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Información del libro seleccionado.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form class=""
                method="post"
                action="{{ route('studentss.update', $studentss) }}"
                >

                {{ csrf_field() }}
                {{ method_field('put') }}

                  <div class="row">



                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name" class="label text-center">Name....</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror text-center"
                        name="name"
                        value="{{ old('name',  $studentss->name) }}" autocomplete="name"
                        disabled="disabled"
                        autofocus>
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="surname" class="label text-center">Surname</label>
                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror text-center"
                        name="surname" value="{{ old('surname',  $studentss->surname) }}"
                        autocomplete="surname" autofocus disabled="disabled">
                            @error('surname')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</trong>
                              </span>
                            @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="dni" class="label text-center">Dni</label>
                        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror text-center"
                        name="dni" value="{{ old('dni',  $studentss->dni) }}" autocomplete="dni" autofocus disabled="disabled">
                            @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date_of_birth" class="label text-center">Date Birth</label>
                        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror text-center"
                        name="date_of_birth" value="{{ old('date_of_birth',  $studentss->date_of_birth) }}" autocomplete="date_of_birth" autofocus disabled="disabled">
                          @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone" class="label text-center">Phone</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror text-center"
                        name="phone" value="{{ old('phone',  $studentss->phone) }}" autocomplete="phone" autofocus disabled="disabled">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email" class="label text-center">Email</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror text-center"
                        name="email" value="{{ old('email',  $studentss->email) }}" autocomplete="email" autofocus disabled="disabled">
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date_of_address" class="label text-center">Date Address</label>
                        <input id="date_of_address" type="text" class="form-control @error('date_of_address') is-invalid @enderror text-center"
                        name="date_of_address" value="{{ old('date_of_address',  $studentss->date_of_address) }}" autocomplete="date_of_address" autofocus disabled="disabled">
                            @error('date_of_address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <a class="btn btn-primary btn-rounded" href="{{ route('studentss.index') }}">Volver</a>

                  </div>
                </form>

              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
