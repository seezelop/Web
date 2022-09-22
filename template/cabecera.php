<html>
<head>
	<title>Esto es una WEB</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
<h1>Esto es un Sitio</h1>
<nav>
	<ul>
<?php
	$menu= array();
    $menu['Inicio'] = "index.php";
    $menu['Quienes somos'] = "quienes_somos.php";
    $menu['Servicios'] = "servicios.php";
    $menu['Contacto'] = "contacto.php";
	
	foreach ($menu as $boton=>$link){
		
		echo "<li class='lista'><a href=$link >$boton</a></li>";
		
	}
	
	
		/*<li class="lista"><a href="index.php" >Home</a></li>
		<li class="lista"><a href="pag1.php" >Otra pagina</a></li>
		<li id="no_lista">Cosa 3</li>*/
	
?>
	</ul>
</nav>
    <div class="container">
        <br>
        <div class="row"></div>
    </div>

</header>