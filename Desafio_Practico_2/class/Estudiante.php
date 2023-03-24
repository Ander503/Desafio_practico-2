<?php
require_once('Persona.php');

class Estudiante extends Persona{

 protected $calificaciones=array();
 protected $notapromedio;  
 protected $codigo_Estudiante;

 


 public function __construct($calificaciones_=[],$notapromedio_="0", $codigo="0"){
 
        //propios de la clase
        $this->codigo_Estudiante=$codigo;
        $this->calificaciones=$calificaciones_;
        $this->notapromedio=$notapromedio_;
 }


 //Encapsulamiento

    //Getters
    public function GetCod_E() {
        return $this->codigo_Estudiante;
    }

    public function Getnotas_E(){
        return implode("<br><li>",$this->calificaciones);
    }

    public function GetPromedio_e(){
        return $this->notapromedio;
    }
    
    // setters
    public function SetCod_e ($cod) {
        $this->codigo_Estudiante= $cod;
    }

    public function Setnotas_E($nota){
        $this->calificaciones[]=$nota;
        
    }

    public function SetPromedio($promedio){
        $this->notapromedio=$promedio;
    }



 //metodos
public function Generar_Codigo($nombre_e, $apellido_e){
    //Extrae la primera letra de nombre y apellido        
    $primera_=substr($this->nombre=$nombre_e,0,1);
    $segunda_=substr($this->apellido=$apellido_e,0,1);

    //Numero random 
    $random_num=rand(250,350);

   /* echo "primera letra".$primera_;
    echo "primera letra ape".$segunda_;*/

    //E -> De estudiante
    $codigo_E= "E_".$primera_  .$segunda_ . $random_num;


    return $this->codigo_Estudiante=$codigo_E;
}


public function CalcularNotaPromedio($nota1,$nota2,$nota3){
    //Toma los valores de las posiciones 0,1,2
    $nota1=$this->calificaciones[0];
    $nota2=$this->calificaciones[1];
    $nota3=$this->calificaciones[2];

    //Suma el valor de esos posiciones y las divide entre 3
    $suma_div=(($nota1+$nota2+$nota3)/3);
    //La suma_div pasa a ser el promedio el cual se aproxima a 2 decimales
    $Promedio=round($suma_div,2);

    
    //Se retorna la variable promedio
    return $this->notapromedio=$Promedio;
}



 

}

/**PRUEBAS**/
$estudiante1=new Estudiante;
$nombre="PEPE";
$estudiante1->setNombre($nombre);

$apellido="Papa";
$estudiante1->setApellido($apellido);

$estudiante1->Setnotas_E($nota1[0]=8.9);
$estudiante1->Setnotas_E($nota2[1]=7.5);
$estudiante1->Setnotas_E($nota3[3]=6);

$fecha_n="2002-03-27";

$edad=$estudiante1->CalcularEdad($fecha_n);

echo "nombre: ". $estudiante1->getNombre();
echo "<br>";
echo "apellido: ". $estudiante1->getApellido();
echo "<br>";
echo "CODIGO: ". $estudiante1->Generar_Codigo($nombre,$apellido);
echo "<br>";
echo "Notas: ";
echo "<li>".$estudiante1->Getnotas_E();
echo "<br>";
echo "Promedio: ". $estudiante1->CalcularNotaPromedio($nota1,$nota2,$nota3);
echo "<br>";
echo "Edad: ".$estudiante1->CalcularEdad($fecha_n);
echo "<br>";
echo $estudiante1->EsmayorEdad($edad);


?>