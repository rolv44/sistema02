<!DOCTYPE html>
<html lang="EN">
<head>
  <meta charset="utf-8">
  <title>SISTEMA02</title>
</head>
<style>
		header{
			position:relative;
			margin:auto;
			text-align:center;
			padding:5px;
		}

		nav{
			position:relative;
			margin:auto;
			width:100%;
			height:auto;
			background:black;
		}

		nav ul{
			position:relative;
			margin:auto;
			width:50%;
			text-align: center;
		}

		nav ul li{
			display:inline-block;
			width:24%;
			line-height: 50px;
			list-style: none;
		}

		nav ul li a{
			color:white;
			text-decoration: none;
		}

		section{
			position:relative;
			padding:20px;
		}

	</style>
<body>
<header>
  <h1>MODELO, VISTA Y CONTROLADOR</h1>
</header>
<?php
include"modulos/navegacion.php";
?>
<section>
<?php

$mvc=new MvcControlador();
$mvc->linkPageControlador();
?>
</section>


</body>
</html>
