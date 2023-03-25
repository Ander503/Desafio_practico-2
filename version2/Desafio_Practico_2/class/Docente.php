<?php
require_once('Persona.php');

class Docente extends Persona{

    protected $asignaturas=array();
    protected $EsmayorEdad_D;
    protected $PagoPorHora;
    protected $Horas_trabajadas;
    protected $salario;
    protected $codigo_Docente;

    


/*
    public function __construct($materias_=[], $mayorE='No definido',$horas="0", $salario_="0",$codigo,$PHORA="0" )
    { 
        //propios de la clase
        $this->asignaturas=$materias_;
        $this->EsmayorEdad_D=$mayorE;
        $this->PagoPorHora=$PHORA;
        $this->Horas_trabajadas=$horas;
        $this->salario=$salario_;
        $this->codigo_Docente=$codigo;
 }-*/

 //Encapsulamiento
   //Getters
   public function getAsignatura(){
      return implode("<br><li>",$this->asignaturas);      
   }
   public function getmayoredad(){
      return $this->EsmayorEdad_D;
   }

   public function getpago_hora(){
      return $this->PagoPorHora;
   }

   public function gethoras(){
      return $this->Horas_trabajadas;
   }

   public function getsalario(){
      return $this->salario;
   }

   public function getcod_d(){
      return $this->codigo_Docente;
   }

   //Setters
   public function setAsignatura($asignatura){
      $this->asignaturas[]=$asignatura;
   }

   public function setMayoredad($mayor_d){
      $this->EsmayorEdad_D=$mayor_d;
   }

   public function setpago_hora($pago_h=10.50){
      $this->PagoPorHora=$pago_h;
   } 

   public function sethoras_t($horas_t){
      $this->Horas_trabajadas=$horas_t;
   }

   public function setSalario($salario_){
      $this->salario=$salario_;
   }

 //metodos

 public function Generar_Codigo($nombre_D, $apellido_D){
    //Extrae la primera letra de nombre y apellido        
    $primera_=substr($this->nombre=$nombre_D,0,1);
    $segunda_=substr($this->apellido=$apellido_D,0,1);

    //Numero random 
    $random_num=rand(450,550);

/*    echo "primera letra".$primera_;
    echo "primera letra ape".$segunda_;*/
    
    //D -> De Docente
    $codigo_D= "D_".$primera_ . $segunda_ . $random_num;


    return $this->codigo_Docente=$codigo_D;
 }


//aun no esta
 public function Calcular_Salario($horas_t, $pago_h, $sal){
   $this->Horas_trabajadas=$horas_t;
   $this->PagoPorHora="10.50";

 
 }



}


/**Pruebas */

echo "<form  method='post' >";
echo "<input name='nombre'></input>";
echo "<input type='submit' name='enviar'>";
echo "</form>";

if(isset($_POST['enviar'])){
$nombre=$_POST['nombre'];
}

$docente = new Docente;
//$nombre="Anderson";
$apellido="Melendez";
$fecha_n="2002-03-27";

$edad=$docente->CalcularEdad($fecha_n);


if(isset($_POST['enviar'])){
   $docente->SetNombre($nombre);   
   }

$docente->setApellido($apellido);
$docente->setAsignatura($materia[0]="Calculo Integral");
$docente->setAsignatura($materia[1]="Programacion Orientada a Objetos");
$docente->setAsignatura($materia[2]="Qumica General");
$docente->setpago_hora();





echo "nombre: ". $docente->getNombre();
echo "<br>";
echo "apellido: ". $docente->getApellido();
echo "<br>";
if(isset($_POST['enviar'])){
   echo "CODIGO: ". $docente->Generar_Codigo($nombre,$apellido);   
   }

echo "<br>";
echo "Materias: ";
echo "<br>";
echo "<li>".$docente->getAsignatura();
echo "<br>";
echo "Pago por hora: $". $docente->getpago_hora();

?>