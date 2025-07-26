let botonPDF = $("#pdfX")
let pdf = $("#pdf")
let contador = 0
pdf.css({"display":"none"})

botonPDF.on('click',function(){

    if(contador == 0){
    pdf.css({"display":"flex"})
    contador = contador + 1;

    let formData = new FormData()
    let datos = ""
    formData.append('datos',datos)
    
    let url = "/inc/templates/body/pdf.php"


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

        pdf.attr("src","/inc/templates/body/pdf.php")
      
    })
    .fail(function(){


        alert("Error al mostrar el documento")
    })


    }
    else{
        pdf.css({"display":"none"})
        contador = contador - 1

    }

})