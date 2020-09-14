<?php
include_once "Model/DataBase/Request.php";
class LoginModel{
    public function setLogin($user){
        return Request::Login($user);
    }
}
//echo base64_encode($password);
?>