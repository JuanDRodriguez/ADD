<?php
class InicioController{
    private $action;
    public function Plantilla(){
    include "View/PlantillaInicio.php";
    }
    public function headers(){
        if($_SESSION["profile"] == "Administrador"){
            include "View/modules/header.php";
        }else if($_SESSION["profile"] == "Lectura"){
            include "View/modules/headerL.php";
        }else{
            include "View/modules/headerO.php";
        }
    }
    public function enlacesPagina(){
    if(isset($_POST["Ruser"])){
        include "View/modules/Registro.php";
        $this-> registerUser();
        } else{
            if(isset($_GET["action"])){
                $this->action = $_GET["action"];
                include "View/modules/tabla.php";
                include "View/modules/modal.php";
             
            }else{
                $this->action = "beid";
                include "View/modules/tabla.php";
                include "View/modules/modal.php";
            }
        }
    }
    public function getList(){
        $tabla = new TablaController();
        $tabla-> getTable($this->action);
    }
    public function getForm(){
        switch($this->action){
            case "beid":
                include "View/modules/beid.php";
            break;
            case "apn":
                include "View/modules/Apn.php";
            break;
            case "spn":
                include "View/modules/Spn.php";
            break;
        }
    }
    function registerUser(){
        $Datos = array( "user"=>$_POST["Ruser"],
            "name"=>$_POST["name"],
            "correo"=>$_POST["mail"],
            "password"=>base64_encode($_POST["password"]),
            "profile"=>$_POST["typeProfile"]);
            $respuesta = InicioModel::setRegisterUser($Datos);

            if($respuesta == "success"){
                echo "<script type=\"text/javascript\">alert(\"Usuario registrado\");</script>";
            }else{
                echo "<script type=\"text/javascript\">alert(\"Error al crear usuario\");</script>";
            }
    }

}
?>