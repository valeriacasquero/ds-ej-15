<?php

class PropiedadInmobiliaria {


    public function __construct($dir,$mtscds,$ciu,$val){

        
        $this->Direccion=$dir;
        $this->MetrosCuadrados=$mtscds;
        $this->Ciudad=$ciu;
        $this->Valor=$val;
    }


    public function MostrarDatos(){
        
        
        echo 'Direccion : '. $this->Direccion . '<br>';
        echo 'Metros : ' . $this->MetrosCuadrados . '<br>';
        echo 'Ciudad : ' . $this->Ciudad . '<br>';
        echo 'Valor : ' . $this->Valor . '<br>';

    }

}