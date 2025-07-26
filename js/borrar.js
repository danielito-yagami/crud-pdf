let borrarX = $("#borrarB")

borrarX.on('click', function(e){

e.preventDefault()

let formData = new FormData()

let id = $("#idBorrar").val()



    formData.append('id',id)
    
    let url = "/inc/include/consultas/borrarBase.php"


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


        if(data != " "){
        $("#idBorrar").val("")
        alert("Datos borrados :"+data)
        
        
    
        }else {

        alert("Error al borrar el registro")    
        }
    })
    .fail(function(){


        alert("Error al borrar")
    })




})