<?php


 abstract class Persona{        
    protected $nombre;
    protected $apellido;
    protected $dui;
    protected $nit;
    protected $direccion;
    protected $correo_e;
    protected $telefono_movil;
    protected $telefono_fijo;
    protected $sexo;
    protected $fecha_nac;
    protected $edad;


    //Constructor
    public function __construct($nombre_="No definido", $apellido_="No definido", $dui_="0",$nit_="0", $direccion_="No definido", $correo_e_="No definido", $telefono_movil_="0", $telefono_fijo_="0",$sexo_="vacio", $fecha_nac_="0", $edad_="0"){

        $this->nombre = $nombre_;
        $this->apellido =$apellido_;
        $this->dui=$dui_;
        $this->nit=$nit_;
        $this->direccion=$direccion_;
        $this->correo_e=$correo_e_;
        $this->telefono_movil=$telefono_movil_;
        $this->telefono_fijo=$telefono_fijo_;
        $this->sexo=$sexo_;
        $this->fecha_nac=$fecha_nac_;
        $this->edad=$edad_;
        
    }


    //Encapsulamiento
    //getters (OBTIENE VALOR)
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getDui() {
        return $this->dui;
    }
    public function getNit() {
        return $this->nit;
    }
    public function getDireccion() {
        return $this->direccion;
    }
    public function getCorreo_e() {
        return $this->correo_e;
    }
    public function getTelefono_movil() {
        return $this->telefono_movil;
    }
    public function getTelefono_fijo() {
        return $this->telefono_fijo;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getFecha_nac() {
        return $this->fecha_nac;
    }
    public function getEdad() {
        return $this->edad;
    }
    
    // setters (Ingresa valores)
    //Aqui se pondrian las validaciones
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setDui($dui) {
        $this->dui = $dui;
    }
    public function setNit($nit) {
        $this->nit = $nit;
    }
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    public function setCorreo_e($correo_e) {
        $this->correo_e = $correo_e;
    }
    public function setTelefono_movil($telefono_movil) {
        $this->telefono_movil = $telefono_movil;
    }
    public function setTelefono_fijo($telefono_fijo) {
        $this->telefono_fijo = $telefono_fijo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function setFecha_nac($fecha_nac) {
        $this->fecha_nac = $fecha_nac;
    }
    public function setEdad($edad) {
        $this->edad = $edad;
    }



    //Metodos
    public function Generar_Codigo($nombre_g, $apellido_g){

        //Extrae la primera letra de nombre y apellido        
        $primera_=substr($this->nombre=$nombre_g,0,1);
        $segunda_=substr($this->apellido=$apellido_g,0,1);

        //Numero random 
        $random_num=rand(250,999);

        /*echo "primera letra".$primera_;
        echo "primera letra ape".$segunda_;*/

        $codigo_u=$primera_. $segunda_. $random_num;


        return $codigo_u;
    }


    public function CalcularEdad($fecha_n){

        //Ingresada por la persona
        $fecha_nac = "1990-01-01";

        //toma la fecha actual
        $fecha_actual = date("Y-m-d"); 

        //Hace el calculo
        $edad = date_diff(date_create($this->fecha_nac=$fecha_n), date_create($fecha_actual))->y;

        return $edad;
    }


    public function EsmayorEdad($edad_e){
        if(!empty($this->edad=$edad_e)|| is_numeric($this->edad)){

            if($edad_e>=18){
                $mayor="Es mayor de edad"  ;              
                return $mayor;
            }

            elseif($edad_e<18){
                $meno="Menor de edad";
                return $meno;
            }
        }

        return false;
    }

}






?>