//PROCESO DE AGREGAR UNA ENTIDAD JQUERY AJAX//

$('#ticketsubmit').click(function () {
    var name = $('#ticketname').val();
    var lastname = $('#ticketlastname').val();
    var dni = $('#ticketdni').val();
    var type = $('#tickettype').val();
    var token = $('#tickettoken').val();
    var job = $('#ticketjob').val();
    var fax = $('#ticketfax').val();
    var cellphone = $('#ticketcellphone').val();
    var phone = $('#ticketphone').val();
    var employee = $('#ticketemployee').val();
    var address = $('#ticketaddress').val();
    var province = $('#ticketprovince').val();
    var canton = $('#ticketcanton').val();
    var district = $('#ticketdistrict').val();
    var user_id = $('#ticketuserid').val();
    var trackingDate = $('#ticketTracking').val();
    var promoterid = $('#ticketpromoter').val();
    var route = 'http://localhost:8000/tickets/create';

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            lastname: lastname,
            dni: dni,
            type: type,
            trackingDate: trackingDate,
            job: job,
            fax: fax,
            cellphone: cellphone,
            phone: phone,
            employee: employee,
            address: address,
            province: province,
            canton: canton,
            district: district,
            user_id: user_id,
            promoter_id: promoterid
        },

        success: function () {
            swal({
                title: "Se ha añadido un nuevo caso",
                text: "<a href='create' class='btn btn-info'>Agregar un nuevo caso</a>",
                html: true,
                type: "success",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Cerrar",
                closeOnConfirm: false
            })

        }

    }).fail(function () {
        swal("Error", "Por favor verifica los campos", "error")
    })


    ;
});

//FIN DEL PROCESO//


// PROCESO DE EDITAR UNA ENTIDAD CON JQUERY AJAX //

function showTicket(btn) {
    console.log(btn.value);
    var routeEdit = "http://localhost:8000/tickets/edit/" + btn.value + "";

    $.get(routeEdit, function (res) {
        $('#ticketname').val(res.name);
        $('#ticketlastname').val(res.lastname);
        $('#ticketdni').val(res.dni);
        $('#tickettype').val(res.type);
        $('#ticketID').val(res.id);
    })
}

$('#ticketUpdate').click(function () {
    var ticketID = $('#ticketID').val();
    var name = $('#ticketname').val();
    var lastname = $('#ticketlastname').val();
    var dni = $('#ticketdni').val();
    var type = $('#tickettype').val();
    var routeUpdate = "http://localhost:8000/tickets/update/" + ticketID + "";
    var token = $('#tickettoken').val();


    $.ajax({
        url: routeUpdate,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {name: name, lastname: lastname, dni: dni, type: type},
        success: function () {
            $('#updateModal').modal('toggle');
            swal("Actualizado", "Se han actualizado los campos correctamente", "success");
            setTimeout(function () {
                location.reload();
            }, 3000);
        }

    });
});


//FIN DEL PROCESO //


//PROCESO DE ELIMINAR ENTIDAD//

function deleteTicket(btn) {
    var routeDelete = "http://localhost:8000/tickets/delete/" + btn.value + "";
    var token = $('#tickettoken').val();

    swal({
            title: "Estas seguro?",
            text: "Eliminarás este dato permanetemente",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, estoy seguro",
            closeOnConfirm: false
        },
        function () {
            $.ajax({
                url: routeDelete,
                headers: {'X-CSRF-TOKEN': token},
                type: 'DELETE',
                dataType: 'json',
                success: function () {
                    swal("Eliminado", "Se han eliminado los campos correctamente", "success");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }

            });
        });


}

//FIN DEL PROCESO //


//CREATE PROMOTER AJAX//

$('#promoter-create').click(function () {
    var name = $('#promoter-name').val();
    var last_name = $('#promoter-last-name').val();
    var phone = $('#promoter-phone').val();
    var cellphone = $('#promoter-cellphone').val();
    var email = $('#promoter-email').val();
    var token = $('#promoter-token').val();
    var route = 'http://localhost:8000/promoters';

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {name: name, last_name: last_name, phone: phone, cellphone: cellphone, email: email},

        success: function () {
            swal({
                title: "Se ha añadido un nuevo promotor",
                text: "<a href='create' class='btn btn-info'>Agregar un nuevo promotor</a>",
                html: true,
                type: "success",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Cerrar",
                closeOnConfirm: false
            })

        }

    }).fail(function () {
        swal("Error", "Por favor verifica los campos", "error")
    })


    ;
});


// EDIT PROMOTER //

function showPromoter(btn) {
    console.log(btn.value);
    var routeEdit = "http://localhost:8000/promoters/" + btn.value + "/edit";

    $.get(routeEdit, function (res) {
        //response
        $('#promoter-id').val(res.id);
        $('#promoter-name').val(res.name);
        $('#promoter-last-name').val(res.last_name);
        $('#promoter-phone').val(res.phone);
        $('#promoter-cellphone').val(res.cellphone);
        $('#promoter-email').val(res.email);
    })
}

$('#promoterUpdate').click(function () {

    var promoterID = $('#promoter-id').val();
    var name = $('#promoter-name').val();
    var last_name = $('#promoter-last-name').val();
    var phone = $('#promoter-phone').val();
    var cellphone = $('#promoter-cellphone').val();
    var email = $('#promoter-email').val();
    var token = $('#promoter-token').val();
    var routeUpdate = "http://localhost:8000/promoters/" + promoterID + "";


    $.ajax({
        url: routeUpdate,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {name: name, last_name: last_name, phone: phone, cellphone: cellphone, email: email},
        success: function () {
            $('#promoters-modal').modal('toggle');
            swal("Actualizado", "Se han actualizado los campos correctamente", "success");
            setTimeout(function () {
                location.reload();
            }, 3000);
        }

    });
});

// END EDIT INSTANCE PROMOTER  \\
function deletePromoter(btn) {
    var routeDelete = "http://localhost:8000/promoters/" + btn.value + "";
    var token = $('#promoter-token').val();

    swal({
            title: "Estas seguro?",
            text: "Eliminarás este dato permanetemente",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, estoy seguro",
            closeOnConfirm: false
        },
        function () {
            $.ajax({
                url: routeDelete,
                headers: {'X-CSRF-TOKEN': token},
                type: 'DELETE',
                dataType: 'json',
                success: function () {
                    swal("Eliminado", "Se han eliminado los campos correctamente", "success");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }

            });
        });
}

// DELETE A PROMOTER \\


// END EDIT A PROMOTER INSTANCE\\


// START CREATE A NEW BUILDER INSTANCE\\

$('#builder-create').click(function () {
    var name = $('#builder-name').val();
    var last_name = $('#builder-last-name').val();
    var main_contact = $('#builder-main-contact').val();
    var civil_status = $('#builder-civil-status').val();
    var province = $('#builder-province').val();
    var canton = $('#builder-canton').val();
    var district = $('#builder-district').val();
    var address = $('#builder-address').val();
    var token = $('#builder-token').val();
    var route = 'http://localhost:8000/builders';

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            last_name: last_name,
            main_contact: main_contact,
            civil_status: civil_status,
            province: province,
            canton: canton,
            district: district,
            address: address
        },

        success: function () {
            swal({
                title: "Se ha añadido un nuevo constructor",
                text: "<a href='create' class='btn btn-info'>Agregar un nuevo Constructor</a>",
                html: true,
                type: "success",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Cerrar",
                closeOnConfirm: false
            })

        }

    }).fail(function () {
        swal("Error", "Por favor verifica los campos", "error")
    })


    ;
});

// END OF CREATE A NEW BUILDER INSTANCE\\

//START UPDATE BUILDER INSTANCE \\


function showBuilder(btn) {
    console.log(btn.value);
    var routeEdit = "http://localhost:8000/builders/" + btn.value + "/edit";

    $.get(routeEdit, function (res) {
        //response
        $('#builder-id').val(res.id);
        $('#builder-name').val(res.name);
        $('#builder-last-name').val(res.last_name);
        $('#builder-main-contact').val(res.main_contact);
        $('#builder-civil-status').val(res.civil_status);
        $('#builder-address').val(res.address);
        $('#builder-province').val(res.province);
        $('#builder-district').val(res.district);
        $('#builder-canton').val(res.canton);

    })
}

$('#builderUpdate').click(function () {

    var builderID = $('#builder-id').val();
    var name = $('#builder-name').val();
    var last_name = $('#builder-last-name').val();
    var main_contact = $('#builder-main-contact').val();
    var civil_status = $('#builder-civil-status').val();
    var address = $('#builder-address').val();
    var province = $('#builder-province').val();
    var canton = $('#builder-canton').val();
    var district = $('#builder-district').val();
    var token = $('#builder-token').val();
    var routeUpdate = "http://localhost:8000/builders/" + builderID + "";


    $.ajax({
        url: routeUpdate,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {
            name: name,
            last_name: last_name,
            main_contact: main_contact,
            civil_status: civil_status,
            address: address,
            province: province,
            canton: canton,
            district: district
        },
        success: function () {
            $('#builder-modal').modal('toggle');
            swal("Actualizado", "Se han actualizado los campos correctamente", "success");
            setTimeout(function () {
                location.reload();
            }, 3000);
        }

    });
});


// END EDIT INSTANCE PROMOTER  \\
function deleteBuilder(btn) {
    var routeDelete = "http://localhost:8000/builders/" + btn.value + "";
    var token = $('#builder-token').val();

    swal({
            title: "Estas seguro?",
            text: "Eliminarás este dato permanetemente",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, estoy seguro",
            closeOnConfirm: false
        },
        function () {
            $.ajax({
                url: routeDelete,
                headers: {'X-CSRF-TOKEN': token},
                type: 'DELETE',
                dataType: 'json',
                success: function () {
                    swal("Eliminado", "Se han eliminado los campos correctamente", "success");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }

            });
        });
}

$(document).ready(function () {
    $('#generate-pdf').click(function () {
        var header = $('#lastre-title').text();
        var date = $('#lastre-date').text();
        var name = $('#lastre-name').text();
        var p1 = $('#lastre-p1').text();
        var p2 = $('#lastre-p2').text();
        var p3 = $('#lastre-p3').text();

        var docDefinition = {


            content: [

               
                // using a { text: '...' } object lets you set styling properties
                {text: header, fontSize: 18, style: ['header']},
                {text: p1, fontSize: 13, style: ['paragraph']},

                // if you set pass an array instead of a string, you'll be able
                // to style any fragment individually
                {text: p2, fontSize: 13, style: ['paragraph']},

                {text: p3, fontSize: 13, style: ['paragraph']}
            ],

            styles: {
                header: {
                    fontSize: 18,
                    bold: true,
                    alignment: 'center',
                    margin: [0, 35, 0, 35]
                },
                subheader: {
                    fontSize: 15,
                    bold: true
                },
                paragraph: {
                    margin: [0, 5, 0, 5]
                },
                small: {
                    fontSize: 8
                }
            }
        };

        pdfMake.createPdf(docDefinition).open();
    });
});


// DELETE A PROMOTER \\