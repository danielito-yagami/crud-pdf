
let opcion = $("#idA")

let idObtener  =opcion.val()


opcion.on('change',function(){


let valor = $(this).val()

console.log(valor)

let formData = new FormData()

formData.append('id',valor)

let url = "/inc/include/consultas/consultaBase.php"


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

    //Para poder usar este JSON
    let contentX = JSON.parse(data)
    console.log(contentX)
      
        $("#nombreA").val(contentX[1])
        $("#apA").val(contentX[2])
        $("#amA").val(contentX[3])
        $("#telA").val(contentX[4])   
   

    
})
.fail(function(){


    alert("Error en la consulta")
})



})