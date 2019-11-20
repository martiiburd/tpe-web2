document.addEventListener("DOMContentLoaded", iniciarPagina);
"use strict";
function iniciarPagina(){
    let lista=document.querySelector("#comentarios");
    let id=document.querySelector("#id-prod").value;
    traerComentario(id);
    function traerComentario(id){
        fetch('api/comentarios?id_prod_fk='+id)
        .then(r=>r.json())
        .then(json=>{
            lista.innerHTML = " ";
            for(let elem of json){
                lista.innerHTML += "<li>" +"Comentario: "+ elem.comentario +" "+ "Puntaje: " + elem.puntaje + " " + "<button class='borrar' data-id ='"+ elem.id_comentario+"'> Borrar </button>" + "</li>" ;
            }
    
            let bot=document.querySelectorAll(".borrar");
            for(let b of bot){
                b.addEventListener("click", function(){
                    eliminarComentario(b.getAttribute("data-id"));
                })
            }
        })
        .catch(error => console.log(error));
    }

    function eliminarComentario(id_coment){
        fetch('api/comentarios/' + id_coment,{
            "method": "DELETE",
        })
        .then(r => r.json())
        .then(json => {
            traerComentario(id);
        })
        .catch(error => console.log(error))
    }

    let btnGuardar=document.querySelector(".btncomentario");
    btnGuardar.addEventListener("click", agregarComentario);
    function agregarComentario(e){
        e.preventDefault();
        let datos={
            "comentario" : document.querySelector(".comentario").value,
            "puntaje" : document.querySelector(".puntaje").value,
            "id_prod_fk" : document.querySelector(".producto").value,
            "id_usuario_fk" : document.querySelector(".usuario").value
        }
        fetch("api/comentarios", {
            "method" : "POST",
            "headers": {"Content-Type":"application/json"},
            "body": JSON.stringify(datos)
        })
        .then(res => res.json())
        .then(json => {
              
                traerComentario(id);
              
        })
        .catch(error => console.log(error))
    }

}
