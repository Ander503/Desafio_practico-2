<?php
require('Persona.php');

class PersonalAdmin extends Persona{
    
    protected $Dependencia;
    protected $EsmayorEdad_AD;
    protected $salarioMensual;
    protected $Funcion;
    protected $AñosTrabajados;
    protected $Jubilar;
    protected $Codigo_Empleado;
    protected $años_trabajados;

   /* public function __construct($dependencia_,$mayor_,$salario_,$funcion,$años, $jubilar_, $codigo_AD){
        $this->Dependencia=$dependencia_;
        $this->EsmayorEdad_AD=$mayor_;
        $this->salarioMensual=$salario_;
        $this->Funcion=$funcion;
        $this->AñosTrabajados=$años;
        $this->Jubilar=$jubilar_;
        $this->Codigo_Empleado=$codigo_AD;
    }*/


    //Encapsulamiento

    //getters
    public function getDependencia(){
        return $this->Dependencia;
    }
    public function getMayoredad(){
        return $this->EsmayorEdad_AD;        
    }
    public function getSalario_m(){
        return $this->salarioMensual;
    }
    public function getFuncion(){
        return $this->Funcion;
    }
    public function getAños_t(){
        return $this->AñosTrabajados;
    }
    public function getjubilar(){
        return $this->Jubilar;
    }
    public function getCodigo_em(){
        return $this->Codigo_Empleado;
    }

    //setters
    public function setDependencia($dependencia){
        $this->Dependencia=$dependencia;
    }
    public function setMayoredad($mayor_e){
        $this->EsmayorEdad_AD=$mayor_e;        
    }
    public function setSalario_m($salaio_ad){
        $this->salarioMensual =$salaio_ad;
    }
    public function setFuncion($funcion_ad){
        $this->Funcion=$funcion_ad;
    }
    public function setAños_t($anios_ad){
        $this->AñosTrabajados=$anios_ad;
    }
    public function setjubilar($jubilar_ad){
        $this->Jubilar=$jubilar_ad;
    }
    public function setCodigo_em($cod_ad){
        $this->Codigo_Empleado=$cod_ad;
    }


    //Metodos
    public function Generar_Codigo($nombre_ad, $apellido_ad)
    {
        //Extrae la primera letra de nombre y apellido        
        $primera_=substr($this->nombre=$nombre_ad,0,1);
        $segunda_=substr($this->apellido=$apellido_ad,0,1);

        //Numero random 
        $random_num=rand(650,750);

        
        //AD -> De ADMINISTRATIVO
        $codigo_D= "AD_".$primera_ . $segunda_ . $random_num;


        return $this->Codigo_Empleado=$codigo_D;
    }


    public function años_detrabajo($año_inicio){
        $fecha_inicio = new DateTime("$año_inicio-01-01"); // crear objeto DateTime con la fecha de inicio de trabajo
        $fecha_hoy = new DateTime(); // crear objeto DateTime con la fecha actual
        $a_trabajados = date_diff($fecha_inicio, $fecha_hoy)->y; // calcular la diferencia en años

        return $this->AñosTrabajados= $a_trabajados; // devolver el número de años calculado
    } 



    //Tomo los años trabajados fuera de la empresa
    public function Calcular_Jubilacion($años_){
         if(is_numeric($this->AñosTrabajados=$años_) || !empty($this->AñosTrabajados)){
            if($this->AñosTrabajados >= 30){
                $si= "Ya esta apto para jubilarse";
                return $si ; //se jubila
            }
            elseif($años_ < 30){
                
                $no= "No esta apto para jubilarse";
                return $no;
            }
         }          

    }

}

/*

$admin = new PersonalAdmin();
$nombre="Laki";
$apellido="Kinoa";
$fecha_n="1975-11-19";
$cargo="Jefe de area de analisis";
$funcion="Jefe de area";
$salario="450";

$admin->setSalario_m($salario);
$admin->setNombre($nombre);
$admin->setApellido($apellido);
$admin->setFecha_nac($fecha_n);
$admin->setDependencia($cargo);
$admin->setFuncion($funcion);
$edad=$admin->CalcularEdad($fecha_n);
$admin->setjubilar($edad);


echo "nombre: ". $admin->getNombre();
echo "<br>";
echo "apellido: ". $admin->getApellido();
echo "<br>";
echo "CODIGO: ". $admin->Generar_Codigo($nombre,$apellido);
echo "<br>";
echo "Edad: ".$admin->CalcularEdad($fecha_n);
echo "<br>";
echo $admin->EsmayorEdad($edad);
echo "<br>";
echo "Dependencia: ".$admin->getDependencia();
echo "<br>";
echo "cargo: ".$admin->getFuncion();
echo "<br>";
echo "Salario: ".$admin->getSalario_m();
echo "<br>";
echo "Jubilacion: ".$admin->getjubilar();
echo "<br>";
echo $admin->Calcular_Jubilacion($doc);
echo "<br>";
echo $admin->años_detrabajo($año);*/



?>