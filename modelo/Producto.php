<?php

class Producto
{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;
    
    
    
    public function MostrarDatos()
    
    { echo 'Producto: <br>';
        echo 'Id: '. $this->Id . '<br>';
        echo 'Nombre: '. $this->Nombre . '<br>';
        echo 'Precio: '. $this->Precio . '<br>';
        echo 'Stock: '. $this->Stock . '<br>';
    
        echo '-------------------------------------<br>';
        echo 'Tipo Producto: <br>';
            echo 'Id: '. $this->TipoProducto->Id . '<br>';
            echo 'Nombre: '. $this->TipoProducto->Descripcion . '<br>';
    } 
        
    
}

