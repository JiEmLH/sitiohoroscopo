<?php
	if(isset($_COOKIE['contador'])) {
		//Caduca eal cerrar el navegador
		setcookie('contador',$_COOKIE['contador']+1);
		/*Si queremos que caduqye en un año
		setcookie('contador',$_COOKIE['COOKIE['contador'+1,time()+365*24+60*60);*/
		$mensaje = 'Número de visitas: ', $_COOKIE['contador'];
	}
	else {
		//Caduca al cerrar el navegador
		setcookie('contador', 1);
		/*Si queremos que caduque en un año
		setcookie('contador', 1, time()+365*24*60*60);*/
		$mensaje = 'Bienvenido a nuestra página web';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pryeba de cookie</title>
	</head>
	<body>
		<p> <?php echo $mensaje; ?> </p>
	</body>
</html>