@extends('layouts.app')

@section('htmlheader_title')
    Contructoras
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                    @include('builders.form')
                <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="#" class="btn btn-default" id="builder-create">Guardar</a>
                        </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
