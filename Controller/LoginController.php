<?php
class LoginController{
    public function Plantilla(){
        include "View/PlantillaLogin.php";
    }
    public function setLogin($user,$password){
        $respuesta = LoginModel::setLogin($user);
        if($respuesta[0] == $user && base64_encode($password) == $respuesta[1]){
            session_start(); 
            $_SESSION["isSession"] = true;
            $_SESSION["user"]= $user;
            $_SESSION["profile"]= $respuesta[2];
            $_SESSION["correo"]= $respuesta[3];
            return true;
            
        }else{
            return false;
        }
    }
}
?>