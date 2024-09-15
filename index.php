<?php
    class Persona{
        
        public $nombre = array();
        public $apellido = array();
                
        public function hablar($mensaje) {
            echo $mensaje;
        }        
        public function guardar($nombre, $apellido) {
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
        public function mostrar() {
            for($i = 0; $i < count($this->nombre);$i++){
                //$this->formato($this->nombre[$i], $this->apellido[$i]);
                Persona::formato($this->nombre[$i], $this->apellido[$i]);
                //self::formato($this->nombre[$i], $this->apellido[$i]);
            }
        }
        public function formato($nombre, $apellido) {
            echo "Nombre: ".$nombre." | Apellido: ".$apellido."<br>";
        }
    }
    
    $persona = new Persona();
    //echo $persona->nombre;
    
    //$persona->hablar("saludos desde codigo");
    $persona->guardar("Juan", "Ferrer");
    $persona->guardar("Luis", "Valdez");
    $persona->mostrar();
?>

    
    
?>

