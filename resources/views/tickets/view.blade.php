@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                         src="http://www.diaglobal.org/_Images/member/Generic_Image_Missing-Profile.jpg"
                         alt="User profile picture">

                    <h3 class="profile-username text-center">{{$ticket->name}} {{$ticket->lastname}}</h3>

                    <p class="text-muted text-center">{{$ticket->type}}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">

                            <b>Seguimiento</b>
                            @if($seguimiento === 'hace 1 segundo')

                                <a class="pull-right"> <strong>HOY</strong> </a>

                            @else
                                <a class="pull-right"> <strong>{{$seguimiento}}</strong> </a>
                            @endif


                        </li>

                        <li class="list-group-item">
                            <b>Asesor:</b>
                            <a class="pull-right"><strong>{{$author->name}}</strong></a>
                        </li>

                        <li class="list-group-item">
                            <b>Promotor:</b>
                            <a class="pull-right"><strong>{{$promoter->name}} {{$promoter->last_name}}</strong></a>
                        </li>


                    </ul>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Información Personal</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <strong><i class="fa fa-map-marker margin-r-5"></i>Domicilio</strong>

                    <p class="text-muted">{{$ticket->province}}, {{$ticket->canton}}, {{$ticket->district}}</p>


                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección Exacta</strong>

                    <p>{{$ticket->address}}</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>

        <div class="col-md-9">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-pills ">
                    <li class="active"><a href="#tab_1" data-toggle="tab">General</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Boleta de Lastre</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">

                        <div class="row">


                            <div class="col-xs-4">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" placeholder="{{$ticket->name}}" id="name"
                                       disabled="">

                            </div>

                            <div class="col-xs-4">
                                <label for="lastname">Apellidos</label>
                                <input type="text" class="form-control" placeholder="{{$ticket->lastname}}"
                                       id="lastname" disabled="">
                            </div>

                            <div class="col-xs-4">
                                <label for="dni">Cedula</label>
                                <input type="text" class="form-control" placeholder="{{$ticket->dni}}" id="dni"
                                       disabled="">
                            </div>
                        </div>


                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <h2 class="text-center" id="lastre-title">Boleta de verificación colocación de lastre</h2>
                        <p id="lastre-date"><b>Fecha:</b> <span class="text-capitalize">{{$fecha}}</span></p>
                        <p id="lastre-p1"><b>Beneficiario:</b> <span
                                    class="text-capitalize">{{$ticket->name}} {{$ticket->lastname}}</span></p>
                        <p id="lastre-p2">Por medio de este documento yo: <span
                                    id="lastre-name">{{$ticket->name}} {{$ticket->lastname}}</span> con
                            cédula: {{$ticket->dni}} manifiesto que se ha
                            revisado la correcta colocación de lastre en la vivienda.
                        </p>

                        <p id="lastre-p3"><span class="text-left">Firma ________________ </span> <span
                                    class="text-right">Constructor _______________ </span></p>

                        <a href="#" class="btn btn-default" id="generate-pdf">Generar pdf</a>
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">s

                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>


    </div>
@endsection
