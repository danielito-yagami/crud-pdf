//Inicio de los div

let actualizar = $("#update")
let insertar = $("#insert")
let borrar = $("#delete")
let consulta = $("#consulta")

actualizar.css({"display":"none"})
insertar.css({"display":"none"})
borrar.css({"display":"none"})
consulta.css({"display":"none"})

let btonA = $("#btonA")
let btonI = $("#btonI")
let btonB = $("#btonB")
let btonC = $("#btonC")

let parametro1 = "#update"
let parametro2 = "#insert"
let parametro3 = "#delete"

//Funcion general

function seleccionX(bton1,bton2,bton3){

    return function(){
    $(bton1).css({"display":"flex"})
    $(bton2).css({"display":"none"})
    $(bton3).css({"display":"none"})
    consulta.css({"display":"none"})
    //console.log("funciona")
    }
}

let updateX = seleccionX(parametro1,parametro2,parametro3)
let insertX = seleccionX(parametro2,parametro1,parametro3)
let deleteX = seleccionX(parametro3,parametro1,parametro2)

btonA.on('click',updateX)
btonI.on('click',insertX)
btonB.on('click',deleteX)

//Parte de la consulta
btonC.on('click',function(){
    consulta.css({"display":"flex"})
    borrar.css({"display":"none"})
    actualizar.css({"display":"none"})
    insertar.css({"display":"none"})

    let formData = new FormData()

    let datosVacios = ""

    formData.append('datos',datosVacios)

    let url = "/inc/templates/body/consultar.php"

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


        $("#tablaConsulta").html(data)
    })
    .fail(function(){


        alert("Error al consultar: ")
    })

})