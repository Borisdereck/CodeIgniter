$(document).ready(function () {
//editamos datos del usuario
    $("#datos").on('click', '.btn-info', function (e) {
        //Rescato valores de la tabla
        var id = $(this).data('id');
        var nombre = $("#Name" + id).html();
        var pop = $("#Population" + id).html();
        //alert(nombre); 
        //Asigno valores a la tabla
        $("#ided").val(id);
        $("#nameed").val(nombre);
        $("#poped").val(pop);
    });

    $("#myModal").on('click', '.edt', function (e) {
        //Rescato valores de la tabla
        var id = $("#ided").val();
        var nombre = $("#nameed").val();
        var pop = $("#poped").val();
        //alert(id + " " +nombre + " " +pop); 
        //Asigno valores a la tabla
        $.ajax({
            type: 'POST',
            url: 'multi_user',
            async: true,
            data: {id: id, nombre: nombre, Population: pop},
            success: function () {
                alert("Operacion Exitosa");
                //window.location.reload(true);
                console.log("Ciudad " + nombre + " Editada");
            }
        });
    });
    
    $("#myModal .modal-footer").on('click', '.mo', function () {
        //var id = $("#ided").val();
        window.location.reload(true);
    });


    //eliminamos datos del usuario
    $("#datos").on('click', '.btn-default', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: 'delete_user',
            async: true,
            data: {id: id},
            success: function () {
                alert("Ciudad " + id + " Eliminada");
                window.location.reload(true);
                console.log("Ciudad " + id + " Eliminada");
            }
        });
    });
    //añadimos usuarios nuevos
    $("#insertar").on('click', '.ins', function () {
        //var id = $("#ided").val();
        var nombre = $("#nameins").val();
        var pop = $("#popins").val();
        //alert(nombre + " " +pop); 
        $.ajax({
            type: 'POST',
            url: 'insert',
            async: true,
            data: {nombre: nombre, Population: pop},
            success: function () {
                alert("Operacion Exitosa");
                var nombre = $("#nameins").val("");
                var pop = $("#popins").val("");
                //$('#añadir').modal('toggle');
                console.log("Ciudad " + nombre + " Agregada");
            }
        });
    });

    $("#insertar .modal-footer").on('click', '.bo', function () {
        //var id = $("#ided").val();
        window.location.reload(true);
    });
});