$(document).ready(function() {

    $("#form-zipcode").submit(function(e){
        e.preventDefault();
        generatedZip();
    });
});

function generatedZip(){
    var data = $("#form-zipcode").serializeArray();
    //data.push({name: 'save', value: save});
    console.log(data);

    $.ajax({
        type: "POST",
        url: './agents',
        data: {data: data},
        success: function(data) {
                console.log(data);
                $('#rna8').val(data);
        }
    });

    /*$.ajax({
        url: pathurl + "aseo/generatedTarifa720",
        type: 'POST',
        data: data,
        complete: function () {
            hidePreload();
        },
        success: function (result) {
            showPreload();
            if(result.isvalid == 1){
                getSemanasMes(result.area);
                getPeriodoActual(result.area);
                if(result.status == "ok"){
                    toastr['success'](result.message);
                    $(".btn-save-partial").attr("disabled", "disabled");
                    $(".btn-big").attr("disabled", true);
                }else{
                    toastr['error'](result.message);
                }
            }else{
                getSemanasMes(result.area);
                getPeriodoActual(result.area);
                $(".btn-big").attr("disabled", false);
                if(result.message != ""){
                    toastr['error'](result.message);
                }
                var msg = "";
                for(var key in result.messageEstratoSinAforo)
                {
                    if(result.messageEstratoSinAforo[key] != ""){
                        msg += result.messageEstratoSinAforo[key];
                    }
                }
                if(msg != ""){
                    toastr['error']("[Errores en Cantidad de usuarios sin aforo]" + msg);
                }
                msg = "";
                for(var key in result.messageEstrato)
                {
                    if(result.messageEstrato[key] != ""){
                        msg += result.messageEstrato[key];
                    }
                }
                if(msg != ""){
                    toastr['error']("[Errores en Porcentajes de solidaridad]" + msg);
                }
                for(var key in result.messageSitios)
                {
                    if(result.messageSitios[key] != ""){
                        toastr['error']("[" + key + "]<br/>" + result.messageSitios[key]);
                    }
                }
            }
        },
        beforeSend: function () {
            showPreload();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
            hidePreload();
        }
    });*/
}