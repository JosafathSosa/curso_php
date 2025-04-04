<?php 

class Usuario{
    //protected Solo se puede acceder desde la misma clase o desde clases hijas
    //private Solo se puede acceder desde la misma clase
    //public Se puede acceder desde cualquier parte del código

    public $nombre;
    protected $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario{
    public function mostrarCorreo(){
        return $this->correo; // Acceso a la propiedad protegida desde la clase hija
    }
}

$josa = new Miembro("Ramiro Josafath", "sosajimenezramiro@gmail.com");
echo $josa->mostrarCorreo();

?>