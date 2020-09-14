<?php
include_once "Model/DataBase/Request.php";
class InicioModel{
    public function setRegisterUser($datos){
        return Request::setRegistroUser($datos);
    }
}
?>