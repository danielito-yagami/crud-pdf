let actualizarX = $("#actualizarB")

actualizarX.on('click', function(event){

event.preventDefault()

let formData = new FormData()

let nombre = $("#nombreA").val()
let apellidoP = $("#apA").val()
let apellidoM = $("#amA").val()
let telefono = $("#telA").val()
let id = $("#idA").val()
if(nombre =="" || apellidoP == "" || apellidoM == "" || telefono == ""){

alert("No puedes dejar datos en blanco")
return
}else {

    formData.append('nombre',nombre)
    formData.append('apellidoP',apellidoP)
    formData.append('apellidoM',apellidoM)
    formData.append('telefono',telefono)
    formData.append('id',id)
    let url = "/inc/include/consultas/actualizarBase.php"


    $.ajax({

        url:url,
        type:'POST',
        datatype:'text',
        cache:false,
        processData :false,
        contentType:false,
        data:formData
    })
    .done(function(data){


        if(data == 0){
        alert("Datos actualizados : "+id+" "+nombre+" "+apellidoP+" "+apellidoM+" "+telefono)
        }else {

        alert("Error al actualizar")    
        }
    })
    .fail(function(){


        alert("Error al actualizar el id: "+ id)
    })
}



})