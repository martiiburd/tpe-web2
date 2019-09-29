<?php
    class viewUsuario{
        
        public function mostrarCategorias($categorias){
            echo "<ul>";
                foreach($categorias as $categoria){
                    echo "<li>" . $categoria->nombre . ' ' . $categoria->descripcion . ' ' . '<a href="productos/'.$categoria->id_categoria . '">Ver Productos</a>'. "</li>";
                    
                }
                
            echo "</ul>";
        }
        public function mostrarProductos(){
            // echo "<ul>";
            //     // if($productos -> $categorias){ 
            //     //  foreach($id_categoria as $producto){
            //          echo "<li>" . $producto->producto . ' ' . '$'. $producto->precio . "</li>";
            //      }   
            //     }
            // echo "</ul>";
        var_dump($);
        }
}
