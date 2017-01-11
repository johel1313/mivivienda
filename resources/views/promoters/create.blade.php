@extends('layouts.app')

@section('htmlheader_title')
    Promotores
@endsection


@section('main-content')
    <div class="container spark-screen">
        <form action="promoters/create" method="POST">
            @include('promoters.form')

            <div class="box-footer">
                <a href="#" class="btn btn-default" id="promoter-create">Guardar</a>
            </div>
        </form>
    </div>
@endsection
