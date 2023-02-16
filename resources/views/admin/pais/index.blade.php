@extends('layouts.app')


@section('content')
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> >Pais</span><span class="ml-2"></span></p>

                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Pais</h1>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card_layout pb-5 pt-3">

                    <div class="col-md-12 card bg-white mx-auto card_list border-0">
                        <div class="table-responsive">
                            <div class="col-md-12 card-body pt-3">
                                <div class="card_layout pt-3">
                                    <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                        Pais List
                                        <button type="button" class="btn btn-primary button_theme float-right"
                                            id="add_todo">+ Create New
                                        </button>
                                    </div>
                                    <br>
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                @if (count($todos))
                                                    <table class="table table-hover border-0 w-100 responsive"                                                    id="especialities">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name</th>
                                                                <th>Actionss</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody id="list_todo">
                                                            @foreach ($todos as $todo)
                                                                <tr id="row_todo_{{ $todo->id }}">
                                                                    <td width="20">{{ $todo->id }}</td>
                                                                    <td>{{ $todo->name }}</td>
                                                                    <td width="150">
                                                                        <button type="button" id="edit_todo"
                                                                            data-id="{{ $todo->id }}"
                                                                            class="btn btn-sm btn-info ml-1">Edit</button>

                                                                        <button type="button" id="delete_todo"
                                                                            data-id="{{ $todo->id }}"
                                                                            class="btn btn-sm btn-danger ml-1">Delete</button>
                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <div><span>No data</span></div>
                                                @endif
                                            </div>

                                        </div>

                                        <!-- The Modal -->
                                        <div class="modal" id="modal_todo">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form id="form_todo">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="modal_title"></h4>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" id="id">
                                                            <input type="text" name="name" id="name_todo"
                                                                class="form-control"
                                                                placeholder="Ingrese el nombre del pais">
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-info">Submit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });



        $("#add_todo").on('click', function() {
            $("#form_todo").trigger('reset');
            $("#modal_title").html('Add Country');
            $("#modal_todo").modal('show');
            $("#id").val("");
        });

        $("body").on('click', '#edit_todo', function() {
            var id = $(this).data('id');
            $.get('todos/' + id + '/edit', function(res) {
                $("#modal_title").html('Edit Todo');
                $("#id").val(res.id);
                $("#name_todo").val(res.name);
                $("#modal_todo").modal('show');
            });
        });

        // Delete Todo
        $("body").on('click', '#delete_todo', function() {
            var id = $(this).data('id');
            confirm('Are you sure want to delete !');

            $.ajax({
                type: 'DELETE',
                url: "todos/destroy/" + id
            }).done(function(res) {
                $("#row_todo_" + id).remove();
            });
        });

        //save data

        $("form").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "todos/store",
                data: $("#form_todo").serialize(),
                type: 'POST'
            }).done(function(res) {
                var row = '<tr id="row_todo_' + res.id + '">';
                row += '<td width="20">' + res.id + '</td>';
                row += '<td>' + res.name + '</td>';
                row += '<td width="150">' + '<button type="button" id="edit_todo" data-id="' + res.id +
                    '" class="btn btn-info btn-sm mr-1">Edit</button>' +
                    '<button type="button" id="delete_todo" data-id="' + res.id +
                    '" class="btn btn-danger btn-sm">Delete</button>' + '</td>';

                if ($("#id").val()) {
                    $("#row_todo_" + res.id).replaceWith(row);
                } else {
                    $("#list_todo").prepend(row);
                }

                $("#form_todo").trigger('reset');
                $("#modal_todo").modal('hide');

            });
        });
    </script>
@endsection
