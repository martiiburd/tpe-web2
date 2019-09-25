<?php
    class viewCategoria{
        
        public function mostrarCategorias($categorias){
            echo "<ul>";
                foreach($categorias as $categoria){
                    echo "<li>" . $categoria->nombre . "</li>";
                }
            echo "</ul>";

        }
    }

   
    



   