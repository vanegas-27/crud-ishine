$(() => {

    
    $('.list').change(() => {

        //obtengo el valor
        let op = $('.list').val();
        console.log(op);

        if(op == "crear"){
            $('form').attr("action","./php/crear.php");
        }else if(op == "Actualizar"){
            $('form').attr("action","./php/actualizar.php");
        }else if(op == "eliminar"){
            $('form').attr("action","./php/eliminar.php");
        }

    });

})