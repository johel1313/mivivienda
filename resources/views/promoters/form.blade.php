<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Crear Un Nuevo Promotor</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">

           <div class="row">

               <input type="hidden" name="_token" value="{{csrf_token()}}" id="promoter-token">
               <input type="hidden" name="id" id="promoter-id">

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="promoter-name" placeholder="Nombre">
                </div>


                <div class="col-sm-6">
                    <input type="text" class="form-control" id="promoter-last-name" placeholder="Apellidos">
                </div>


            <div class="blank-space"></div>

                <div class="col-sm-4">
                    <input type="tel" class="form-control" id="promoter-phone" placeholder="Teléfono Hogar">
                </div>



                <div class="col-sm-4">
                    <input type="tel" class="form-control" id="promoter-cellphone" placeholder="Celular">
                </div>



                <div class="col-sm-4">
                    <input type="email" class="form-control" id="promoter-email" placeholder="Correo Electrónico">
                </div>


           </div>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer -->
    </form>
</div>