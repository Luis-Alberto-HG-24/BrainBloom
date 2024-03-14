const validaVacios = () =>{
    if ($(`#usuario`).value === ) {
        console.log($('#usuario').value);
        console.log("vacio");
    } else {
        console.log("Lleno");
        
    }
    
}



$(function (){
    $('#btn_form').on("click", function(){
        validaVacios()

    })
})

