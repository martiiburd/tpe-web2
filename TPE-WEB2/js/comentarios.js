"use strict";

let app = new Vue({
    el: "#vue-comentarios",
    data: {
        titulo: "Comentarios del producto",
        loading: false,
        comentarios: [],

    },
    methods: {
        eliminar: function(event, id_coment) {
            fetch('api/comentarios/' + id_coment,{
                "method": "DELETE",
            })
            .then(r => r.json())
            .then(json => {
                alert("comentario borrado con exito");
                traerComentario();
            })
            .catch(error => console.log(error))
        }
    }
});

function traerComentario() {
    app.loading = true;
    let id_prod=document.querySelector("#id-prod").value;
    fetch("api/comentarios?id_prod_fk="+id_prod)
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios=comentarios;
        app.loading = false;
    })
    .catch(error => console.log(error));
}
document.querySelector("#btn-refresh").addEventListener("click",traerComentario);
traerComentario();

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
        traerComentario();
            
    })
    .catch(error => console.log(error))
}

