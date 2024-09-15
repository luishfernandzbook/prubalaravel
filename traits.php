<?php


trait Persona2{
    
    //tiene atributos, metodos, metodos abstractos
    public $nombre;
    public function mostrarNombre() {
        echo $this->nombre;
    }
    abstract function asignarNombre($nombre);
}

trait Trabajador{
    protected function mensaje() {
        echo "y soy un trajabador";
    }
}

class Persona {
    use Persona2, Trabajador;
    
    public function asignarNombre($nombre) {
        $this->nombre = $nombre;
    }
}

$persona = new Persona();
$persona->asignarNombre('Juan');
$persona->mostrarNombre();

