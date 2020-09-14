<?php
class InicioController{
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
                if ($_GET["action"] == "apn"){
                include "View/modules/Apn.php";
                }else if($_GET["action"] == "spn"){
                include "View/modules/Spn.php";
                }else if($_GET["action"] == "beid"){
                    include "View/modules/beid.php";
                }else if($_GET["action"] == "delspn"){
                    include "View/modules/deletespn.php";
                }else if($_GET["action"] == "delbeid"){
                        include "View/modules/deletebeid.php";
                }else if($_GET["action"] == "delapn"){
                    include "View/modules/deleteapn.php";
            }else{
                include "View/modules/Registro.php";
                }
            }else{
                include "View/modules/tabla.php";
            }
        }
        
        

    }
    public function getList(){
        $networking = New Networking();
        $items = $networking-> doRequest();
        foreach ($items as $item ){
        if(isset($item["name"])){
            echo'
        <tr>
            <td>'.$item["index"].'</td>
            <td>'.$item["name"].'</td>
            <td>'.$item["species"].'</td>
            <td>'.$item["note"].'</td>
        </tr>';
        } 
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