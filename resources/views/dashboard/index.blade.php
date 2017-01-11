@extends('layouts.app')

@section('htmlheader_title')
    Dashboard
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$todayDates->count()}}</h3>

                    <p>Segumientos para el dia de hoy</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clipboard"></i>
                </div>
                <a href="#" class="small-box-footer">
                    mas informacion <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>{{$soonDates->count()}}</h3>

                    <p>Proximos seguimientos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="dashboard/soon" class="small-box-footer">
                    mas informacion <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$previousDates->count()}}</h3>

                    <p>Seguimientos Vencidos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clock"></i>
                </div>
                <a href="" class="small-box-footer">
                    mas informacion <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>





    </div>
@endsection