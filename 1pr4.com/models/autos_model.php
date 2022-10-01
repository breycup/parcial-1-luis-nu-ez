<?php

class autos_model{
    private $id;
    private $marca;
    private $modelo;
    private $precio;
    private $dias;
    private $preciopagar;
    private $foto;

    public function __construct($id,$marca,$modelo,$precio,$dias,$preciopagar,$foto){
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->dias = $dias;
        $this->preciopagar = $preciopagar;
        $this->foto = $foto;
    }


    public function setid($id){
        $this->id =$id;
    }
    public function getid(){
        return $this->id;
    }

    public function setmarca($marca){
        $this->marca=$marca;
    }
    public function getmarca(){
        return $this->marca ;
    }

    public function setmodelo($modelo){
        $this->modelo=$modelo ;
    }
    public function getmodelo(){
        return $this->modelo ;
    }

    public function setprecio($precio){
        $this->precio=$precio ;
    }
    public function getprecio(){
        return $this->precio ;
    }

    public function setdias($dias){
        $this->dias=$dias;
    }
    public function getdias(){
        return $this->dias;
    }

    public function setpreciopagar($preciopagar){
        $this->preciopagar=$preciopagar;
    }
    public function getpreciopagar(){
        return $this->preciopagar;
    }
    
    public function setfoto($foto){
        $this->foto=$foto;
    }
    public function getfoto(){
        return $this->foto;
    }
    


}

?>