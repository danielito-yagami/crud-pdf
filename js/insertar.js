let insertarX = $("#insertarB")

insertarX.on('click', function(e){

e.preventDefault()

let formData = new FormData()

let nombre = $("#nombreI").val()
let apellidoP = $("#apI").val()
let apellidoM = $("#amI").val()
let telefono = $("#telI").val()
let genero = $("#opciongenero").val()
if(genero == 'default2'){

    alert("Selecciona un genero")
    return
}

if(nombre =="" || apellidoP == "" || apellidoM == "" || telefono == ""){

alert("No puedes dejar datos en blanco")
return
}else {

    formData.append('nombre',nombre)
    formData.append('apellidoP',apellidoP)
    formData.append('apellidoM',apellidoM)
    formData.append('telefono',telefono)
    formData.append('idGenero',genero)
    let url = "/inc/include/consultas/insertarBase.php"


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
            $("#nombreI").val("")
            $("#apI").val("")
            $("#amI").val("")
            $("#telI").val("")   
        alert("Datos insertados : "+nombre+" "+apellidoP+" "+apellidoM+" "+telefono)
        
       
    
        }else {

        alert("Error al insertar el registro")    
        }
    })
    .fail(function(){


        alert("Error al insertar")
    })
}



})