@extends('layouts.app')

@section('htmlheader_title')
    Proximos seguimientos
@endsection


@section('main-content')
    <div class="container spark-screen">
        @foreach($soonDates as $date)
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue">
                    <div class="widget-user-image">
                        <img class="img-circle" src="http://www.nanigans.com/wp-content/uploads/2014/07/Generic-Avatar.png" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username text-bold" style="font-size: 18px">{{$date->name}} {{$date->lastname}}</h3>
                    <h5 class="widget-user-desc">{{$date->type}}</h5>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                        <li><a class="text-center" href="/tickets/{{$date->id}}">Ver Completo</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
            @endforeach
    </div>
@endsection
