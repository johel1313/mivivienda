@extends('layouts.app')

@section('htmlheader_title')
    Lista de constructores
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">LISTA DE CONSTRUCTORES</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="promoters-table" class="table table-bordered table-hover dataTable" role="grid"
                               aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">Nombre
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Apellido
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Contacto
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Estado Civil
                                </th>

                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($builders as $builder)
                                <tr role="row">
                                    <td>{{$builder->name}}</td>
                                    <td>{{$builder->last_name}}</td>
                                    <td>{{$builder->main_contact}}</td>
                                    <td>{{$builder->civil_status}}</td>
                                    <td><a href="builders/{{$builder->id}}" class="btn btn-info btn-sm">Ver</a>
                                        <button type="button" value="{{$builder->id}}"
                                                class="btn btn-primary btn-sm edit-btn" data-toggle="modal"
                                                data-target=".bs-example-modal-lg" onclick="showBuilder(this)">Editar
                                        </button>
                                        <button type="button" value="{{$builder->id}}"
                                                class="btn btn-danger btn-sm delete-btn" onclick="deleteBuilder(this)">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="modal bs-example-modal-lg fade" tabindex="-1" role="dialog"
                     aria-labelledby="gridSystemModalLabel" id="builder-modal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">Editar Caso</h4>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="box-body">

                                        @include('builders.form')

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-default" id="builderUpdate">Guardar</a>
                            </div>
                        </div><!-- /.modal-content -->s
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection