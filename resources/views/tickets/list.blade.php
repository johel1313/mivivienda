@extends('layouts.app')

@section('htmlheader_title')
    Lista de casos
@endsection


@section('main-content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de casos</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    @if($tickets->count() >= 1)
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>ID</th>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>TIPO DE BONO</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->dni}}</td>
                            <td>{{$ticket->name}}</td>
                            <td>{{$ticket->lastname}}</td>
                            <td>{{$ticket->type}}</td>
                            <td><a href="tickets/{{$ticket->id}}" class="btn btn-info btn-sm">Ver</a>
                                <button type="button" value="{{$ticket->id}}" class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="showTicket(this)">Editar</button>
                                <button type="button" value="{{$ticket->id}}" class="btn btn-danger btn-sm delete-btn" onclick="deleteTicket(this)">Eliminar</button>
                            </td>
                        </tr>
                         @endforeach
                        </tbody>
                    </table>

                        @else
                        <div class="alert alert-danger">
                            <p>No existe ningun caso</p>
                        </div>
                        @endif
                </div>
                <!-- /.box-body -->
            </div>

            <div class="modal bs-example-modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="updateModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Editar Caso</h4>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="box-body">

                                    @include('tickets.form')

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-default" id="ticketUpdate">Guardar</a>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- /.box -->
        </div>
    </div>
@endsection