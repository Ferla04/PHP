<?php

class Persona{

    public $nombre;
    public $apodo;
    private $edad;
    protected $altura; // --> solo se puede acceder desde la misma clase o clases heredadas

    function __construct( $nombre, $edad, $altura ){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->alrura = $altura;
    }

    public function asignarApodo( $nickname ){
        $this->apodo = $nickname;
    }

    public function imprimirApodo(){
        echo 'Hola, mi apodo es '.$this->apodo.'<br />';
    }

    public function mostrarEdad(){
        return $this->edad;
    }

    //Funciones estáticas: no necesitan hacerles instancias
    public static function saludo(){
        echo '<br /> Hola Mundo <br/>';
    }
}

//Herencia
class Trabajador extends Persona{
    Public $puesto;

    public function presentarse(){
        echo '<br /> Hola, soy '.$this->apodo.' y trabajo como '.$this->puesto.'<br />';
    }
}




//---------------------------------------------------------------------------
$alumno1 = new Persona('Fernanda', 19, 1.6); //Instancia
$alumno1->asignarApodo('Fer');
$alumno1->imprimirApodo();

$alumno2 = new Persona('Juan', 20, 1.7);
$alumno2->asignarApodo('Juancho');
$alumno2->imprimirApodo();


echo $alumno1->apodo.'<br />';
//echo $alumno1->edad; --> No puedo acceder a ninguna de estas propiedades
//echo $alumno1->alrura;

echo $alumno1->mostrarEdad();

$trabajador1 = new Trabajador('Alma', 54, 1.6);
$trabajador1->asignarApodo('Almita');
$trabajador1->puesto='vendedora';
$trabajador1->presentarse();

//Utilizar una funcion sin instancia
Persona::saludo();

?>