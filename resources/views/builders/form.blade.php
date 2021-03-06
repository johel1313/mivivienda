<div class="box-body">

    <input type="hidden" name="_token" value="{{csrf_token()}}" id="builder-token">
    <input type="hidden" name="id" id="builder-id">


    <div class="col-sm-4">
        <input class="form-control" id="builder-name" placeholder="Nombre" type="text">
    </div>

    <div class="col-sm-4">
        <input class="form-control" id="builder-last-name" placeholder="Apellidos" name="name" type="text">
    </div>

    <div class="col-sm-4">
        <input class="form-control" id="builder-main-contact" placeholder="Contacto" name="main_contact" type="text">
    </div>


    <div class="blank-space"></div>


    <div class="clearfix"></div>


    <div class="col-xs-4">
        <label for="builder-province">PROVINCIA</label>
        <select class="form-control select2 select2-hidden-accessible" name="province" id="builder-province" style="width: 100%;" tabindex="-1" aria-hidden="true">
            @foreach($provinces as $province)
                <option>{{$province->nombre}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-xs-4">
        <label for="builder-canton">CANTON</label>
        <select class="form-control select2 select2-hidden-accessible" name="canton" id="builder-canton" style="width: 100%;" tabindex="-1" aria-hidden="true">
            @foreach($cantones as $canton)
                <option>{{$canton->nombre}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-xs-4">
        <label for="builder-district">DISTRITO</label>
        <select class="form-control select2 select2-hidden-accessible" name="district" id="builder-district" style="width: 100%;" tabindex="-1" aria-hidden="true">
            @foreach($districts as $district)
                <option>{{$district->nombre}}</option>
            @endforeach
        </select>
    </div>

    <div class="blank-space"></div>

    <div class="col-sm-12">
        <textarea class="form-control" rows="3" placeholder="Dirección Exacta" id="builder-address"
                  name="address"></textarea>
    </div>


    <div class="col-xs-4">
        <label for="builder-civil-status">Estado Civil</label>
        <select class="form-control select2 select2-hidden-accessible" name="civil_status" id="builder-civil-status" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option>Casado</option>
            <option>Divorciado</option>
            <option>Union Libre</option>
            <option>Viudo</option>
            <option>Soltero</option>
        </select>
    </div>


</div>