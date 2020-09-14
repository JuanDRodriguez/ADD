<?php
class TablaController{
    public function getTable($action){
        switch($action){
            case "beid":
                $this->headTableBeid();
                echo "</thead>
                <tbody>";
                $this->bodyTableBeid();
            break;
            case "apn":
                $this->headTableApn();
                echo "</thead>
                <tbody>";
                $this->bodyTableApn();
            break;
            case "spn":
                $this->headTableSpn();
                echo "</thead>
                <tbody>";
                $this->bodyTableSpn();
            break;
        }
    }
    private function bodyTableBeid(){
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
                    <td>NA</td>
                    <td></td>
                 </tr>';
            }
        }
    }
    private function bodyTableApn(){
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
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                 </tr>';
            }
        }
    }
    private function bodyTableSpn(){
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
                    <td>NA</td>
                    <td>NA</td>
                 </tr>';
            }
        }
    }
    private function headTableBeid(){
        echo'
            <tr>
                <th>Beid</th>
                <th>Cliente</th>
                <th>SMS</th>
                <th>Ecenario</th>
                <th>Spn</th>
                <th>Producto</th>
            </tr>';
    }
    private function headTableApn(){
        echo'
            <tr>
                <th>Apn</th>
                <th>Beid</th>
                <th>Cliente</th>
                <th>Ecenario</th>
                <th>I. Imsi</th>
                <th>F. Imsi</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Tipo</th>
                <th>Uso</th>
            </tr>';
    }
    private function headTableSpn(){
        echo'
            <tr>
                <th>Beid</th>
                <th>Cantidad</th>
                <th>Cliente</th>
                <th>Rango I.</th>
                <th>Rango F.</th>
                <th>Template</th>
            </tr>';
    }
}
?>