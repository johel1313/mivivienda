<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">INFORMACION PERSONAL</a></li>
        <li><a href="#tab_2" data-toggle="tab">BONO</a></li>
        <li><a href="#tab_3" data-toggle="tab"></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            
            <input type="hidden" name="_token" value="{{csrf_token()}}" id="tickettoken">
            <input type="hidden" id="ticketID">
            <input type="hidden" name="user_id" value="@if(Auth::check()) {{Auth::user()->id}} @endif" id="ticketuserid">
            <div class="col-xs-4">
                <input class="form-control" placeholder="Nombre" type="text" name="name" id="ticketname">
            </div>
            <div class="col-xs-4">
                <input class="form-control" placeholder="Apellido" type="text" name="lastname" id="ticketlastname">
            </div>
            <div class="col-xs-4">
                <input class="form-control" placeholder="Numero de cedula" type="text" name="dni" id="ticketdni">
            </div>

            <div class="col-xs-4">
                <input class="form-control" placeholder="Ocupación" type="text" name="job" id="ticketjob">
            </div>

            <div class="col-xs-4">
                <input class="form-control" placeholder="fax" type="tel" name="fax" id="ticketfax">
            </div>

            <div class="col-xs-4">
                <input class="form-control" placeholder="Telefono" type="tel" name="phone" id="ticketphone">
            </div>

            <div class="col-xs-4">
                <input class="form-control" placeholder="Celular" type="tel" name="cellphone" id="ticketcellphone">
            </div>

            <div class="clearfix"></div>
            <br>
            <div class="col-xs-4">



                <select class="form-control select2 select2-hidden-accessible" name="province" id="ticketprovince" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Provincia</option>

                    @foreach($provinces as $province)
                        <option>{{$province->nombre}}</option>
                    @endforeach

                </select>


            </div>

            <div class="col-xs-4">



                <select class="form-control select2 select2-hidden-accessible" name="canton" id="ticketcanton" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Cantón</option>

                    @foreach($cantones as $canton)
                        <option>{{$canton->nombre}}</option>
                    @endforeach

                </select>


            </div>


            <div class="col-xs-4">



                <select class="form-control select2 select2-hidden-accessible" name="district" id="ticketdistrict" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Distrito</option>

                    @foreach($districts as $district)
                        <option>{{$district->nombre}}</option>
                    @endforeach

                </select>


            </div>

            <div class="blank-space"></div>

            <div class="col-xs-8">
                <textarea class="form-control" rows="3"  placeholder="Introduzca la dirección de domicilio" name="address" id="ticketaddress"></textarea>
            </div>

            <div class="blank-space"></div>

            <br>
            <div class="clearfix"></div>

            <div class="col-xs-4">

                <label for="ticketemployee">Tipo de trabajador</label>

                <select class="form-control select2 select2-hidden-accessible" name="employee" id="ticketemployee" style="width: 100%;" tabindex="-1" aria-hidden="true">

                    <option>Asalariado</option>
                    <option>Independiente</option>
                </select>
            </div>

            <div class="col-sm-4">
                <label for="ticketpromoter">Promotor</label>
                <select class="form-control select2 select2-hidden-accessible" name="promoter" id="ticketpromoter" style="width: 100%;" tabindex="-1" aria-hidden="true">


                    @foreach($promoters as $promoter)
                        <option value="{{$promoter->id}}">{{$promoter->name}} {{$promoter->last_name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="blank-space"></div>

            <label for="ticketTracking">Fecha de seguimiento</label>
            <div class="input-group date col-xs-4">

                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>

                <input class="form-control pull-right" id="ticketTracking" type="text" data-date-format="dd-mm-yyyy">
            </div>



        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <div class="row">
                <div class="col-xs-4">
                    <label for="tickettype">Tipo de bono</label>
                    <select class="form-control select2 select2-hidden-accessible" name="type" id="tickettype" style="width: 100%;" tabindex="-1" aria-hidden="true">

                        <option>Reparación de vivienda</option>
                        <option>Bono Ordinario</option>
                        <option>Bono de discapacidad</option>
                        <option>Bono de discapacidad con compra de lote</option>
                        <option>Adulto mayor</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
   
   
   
   
   
   