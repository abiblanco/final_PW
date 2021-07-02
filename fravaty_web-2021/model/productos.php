<?php
    class productosDAO{
        public static $FILE = "model/productos.json";
        public static function subirIMG(){
            
        }
        public static function productoOcupado($nombre){

            $content = file_get_contents(productosDAO::$FILE);
    
            $arr_productos = json_decode($content, true);
            
            $return = false;
            foreach ($arr_productos as $cred){
    
                if ($cred["nombre"] == $nombre){
                    $return = true;
                    break;
                }
    
            }
    
            return $return;
    
        }
        public static function crearProducto($nombre,$desc,$stock,$categoria,$precio,$imagenes){
            $content = file_get_contents(productosDAO::$FILE);
            move_uploaded_file($imagenes,'public/imagenes/'.$imagenes);
            $arr_productos = json_decode($content, true);

            $product = array(
                "nombre"=>$nombre,
                "descripcion"=>$desc,
                "stock"=>$stock,
                "categoria"=>$categoria,
                "precio"=>$precio,
                "imagenes"=>$imagenes,
            );
            
            array_push($arr_productos,$product);

            $jsondata = json_encode($arr_productos, JSON_PRETTY_PRINT);

            file_put_contents("model/productos.json", $jsondata);
        }
    }
?>