<!DOCTYPE html>
<html>
<head>
	<title>Inicio | COntaVID</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!--Favicon-->
	<link  rel="icon"   href="icon.png" type="image/png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<!--CSS-->
	<link href="estilo.css" rel="stylesheet" type="text/css">
	<!--JS-->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="java.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.0.2/vue.cjs.js"> </script>
</head>

<?php
//phpinfo();
//require 'conexion.php';

//metodo post - envio del pin
	$pin = $_GET['pin'];
	//echo gettype($pin);
	//echo "<br>";
	$token = $_GET['token'];

	/*echo $pin;
	echo "<br>";
	echo gettype($pin);
	echo "<br>";
	echo $token;
	echo "<br>";
	echo gettype($token);
	echo "<br>";*/

	$numpin = intval($pin);
	//echo $numpin;
	//echo "<br>";
	//echo gettype($numpin);
	//echo "<br>";
    $url = 'https://ai-store-api.herokuapp.com/auth/?pin='.$numpin;
	
	//echo $url;
	//echo "<br>";
    //inicializamos el objeto CUrl
    $ch = curl_init();
        
    //Indicamos que nuestra petición sera Post
    curl_setopt($ch, CURLOPT_URL, $url);
        
    //para que la peticion no imprima el resultado como un echo comun, y podamos manipularlo
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "x-access-token: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwaW4iOiI1NTU1IiwiaWF0IjoxNjA2MDkwNDAyLCJleHAiOjE2MDYxNzY4MDJ9.N6u9k_PwX_euSzUpjAnM0gJBKUPNoAmWIb3xu3IzWOw'"));
	$headers = [
		'Content-Type: Content-Type: application/json; charset=utf-8',
		'x-access-token: '.$token
	];
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	//print_r($headers);

    //Ejecutamos la petición
    $result = curl_exec($ch);
	print_r($result);
	echo "<br>";
	
	/*
	$info = curl_getinfo($ch);
	print_r($info);
	*/

    // cerramos la sesión cURL
    curl_close ($ch);
    
    // hacemos lo que queramos con los datos recibidos
    /*$manage = json_decode($result, true);
	echo "<br>";
	print_r($manage);
	*/
?>

<body>
	<!--<header class="header">

		<nav class="navigation">
	  
		  <section class="logo"></section>
	  
		  <section class="navigation__icon">
			<span class="topBar"></span>
			<span class="middleBar"></span>
			<span class="bottomBar"></span>
		  </section>
	  
		  <ul class="navigation__ul">
			<li><a href="main.html">INICIO</a></li>
			<li><a href="grafics.html">GRÁFICAS</a></li>
			<li><a href="report.html">REPORTES</a></li>
			<li><a href="configuration.html">CONFIGURACIÓN</a></li>
		  </ul>
	  
		  <section class="navigation__social">
			<ul class="navigation__social-ul">
			  <li>
				<a href="" class="social-icon"></a>
			  </li>
			  <li>
				<a href="" class="social-icon"></a>
			  </li>
			  <li>
				<a href="" class="social-icon"></a>
			  </li>
			  <li>
				<a href="" class="social-icon"></a>
			  </li>
			</ul>
		  </section>
	  
		</nav>
	  
	</header>-->
<div class="alinear">
					<div class="convertor-card">
					        <div class="base">
					            <span class="valueCont">
									<script>
										document.write(aleatorio);
									</script>
								</span>
											<br>
											<i class="fa fa-male" 
											style="font-size:150px;padding-top:0px;padding-bottom: 20px;">
											</i>
							</div>

					        <div class="converted">
					                <span class="valueDate" id="hora"></span>
					        </div>
					</div>

					<div id= app class="semaforo">
									<div class="rojo">
										<script>
											if(colorSemaforo!=0){
												document.write("<style> .rojo{opacity:.05;} </style>");
											}
										</script>
									</div>
									<div class="amarillo">
										<script>
											if(colorSemaforo!=1){
												document.write("<style> .amarillo{opacity:.05;} </style>");
											}
										</script>
									</div>
									<div class="verde">
										<script>
											if(colorSemaforo!=2){
												document.write("<style> .verde{opacity:.05;} </style>");
											}
										</script>
									</div>
					</div>
</div>
<div id="contenedor_carga">
	<div id="carga">
	</div>
</div>
<script>
	/*window.onload = function(){
		var contenedor = document.getElementById('contenedor_carga');
		contenedor.style.visibility = "hidden";
		contenedor.style.opacity="0";
	}*/
	setTimeout(() => {
		var contenedor = document.getElementById('contenedor_carga');
		contenedor.style.visibility = "hidden";
		contenedor.style.opacity="0";
	}, 1000);
</script>
</body>
</html>
