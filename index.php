<?php
require_once "Controller/LoginController.php";
require_once "Controller/InicioController.php";
require_once "Model/loginModel.php";
require_once "Model/Networking.php";
require_once "Model/InicioModel.php";
$login = new LoginController();
$inicio = new InicioController();
session_start();
if($_SESSION["isSession"]){
    $inicio-> Plantilla();
    
}else{
    if(isset($_POST["user"])){
        if($login-> setLogin($_POST["user"],$_POST["password"])){
            $inicio-> Plantilla();
        }else{
            $login-> Plantilla();
        }
    }
    else{
        $login-> Plantilla();
    }
         
}
?>