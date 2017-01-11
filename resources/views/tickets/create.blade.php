@extends('layouts.app')

@section('htmlheader_title')
    Crear caso
@endsection


@section('main-content')

<div class="container">
    <div id="green-alert" class="alert alert-success alert-dismissible" role="alert" style="display: none">Se ha creado el caso con exito
        <a href="create" class="btn  btn-info pull-right">crear un nuevo caso</a></div>
    <div id="red-alert" class="alert alert-error alert-dismissible" role="alert" style="display: none">Algo salió mal, verifica que los campos son correctos</div>
    <div class="row">
        <form action="tickets/create" class="form-horizontal" method="POST">
            <div class="box-body">

                <div class="box box-primary margin-top">
                    <div class="box-header with-border">
                        <h3 class="box-title">General</h3>
                    </div>
                    <div class="box-body">
                        @include('tickets.form')
                    </div>


                </div>


            </div>



            <div class="box-footer">
                <a href="#" class="btn btn-default" id="ticketsubmit">Guardar</a>
            </div>

        </form>


    </div>
</div>


@endsection