<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/util.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="jquery/jquery-3.5.1.min.js">
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <title>Document</title>
</head>
<body>
<?php
include_once "View/modules/header.php";

echo InicioController::enlacesPagina(); 

include_once "View/modules/footer.php";
?>
</body>
</html>