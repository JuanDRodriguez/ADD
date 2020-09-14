<html>
<title>Portal ADD</title>
<link rel="stylesheet" href="Style/header.css">
<head>
    <style>
     #mitabla{
/*estilo de el cuerpo de nuestra tabla*/
background-color: #1e8cbe;
width:80%;
margin:24px auto;
border-left: 1px solid #ccc;
border-right: 1px solid #ccc;
font-family:helvetica,arial,sans-serif;
font-weight:normal;
text-transform: uppercase;
}

#mitabla th{
/*estilo de los elementos(th)*/
background-color: #278dbc;
color:#fff;
font-weight: normal;
font-size:14px;
padding: 8px;
}

#mitabla td{

/*estilo a los elementos (td)*/
width:100px;
height: 24px;
}



#mitabla tr:nth-child(odd){

background-color: #ffffff;
}

#mitabla tr:nth-child(even){

/*para los colores de las filas pares*/
background:#EDEDED;
}
* {
	margin:0px;
	padding:0px;
}

#header {
	margin:auto;
	width:500px;
	font-family:Arial, Helvetica, sans-serif;
}

ul, ol {
	list-style:none;
}

.nav > li {
	float:center;
}

.nav li a {
	background-color:#000;
	color:#fff;
	text-decoration:none;
	padding:10px 12px;
	display:block;
}

.nav li a:hover {
	background-color:#434343;
}

.nav li ul {
	display:none;
	position:absolute;
	min-width:140px;
}

.nav li:hover > ul {
	display:block;
}

.nav li ul li {
	position:relative;
}

.nav li ul li ul {
	right:-140px;
	top:100px;
}
    </style>
<?php 
 echo InicioController::headers(); 
?>
</head>
<body>

<?php
   echo InicioController::enlacesPagina();  
?>
</body>
</html>