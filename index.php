<?php
      require "config/conexion.php";
      error_reporting(0);
      $nombre = $_POST ['nombre'];
      $cantidad = $_POST ['cantidad'];
      $estado = $_POST ['estado'];
      $valorEntrada = $_POST['valorEntrada'];
      $btnguardar = $_POST ['btnguardar'];
       
      if(isset($btnguardar)){
           $sql = "INSERT into productos (nombre, cantidad, estado,valorEntrada)values('$nombre',$cantidad,'$estado',
           $valorEntrada)";
           if($conexion->query($sql)){ 
           	echo 'Guardado correctamente';
        } else {
        	echo 'error';
        }
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<h1>Hola</h1>
	</head>

<body>
	<h4>Productos</h4>
	<p>Ingresar datos</p>
	<form method = "post" action = "index.php">
		<label>nombre</label>
		<input type="varchar" name="nombre" required="llenar" placeholder = "nombre">
		<label>Cantidad</label>
		<input type="number" name="cantidad" required placeholder = "cantidad">
		<label>Estado</label>
		<input type="varchar" name="estado" required>
		<label>Valor Entrada</label>
		<input type="number" name="valorEntrada" required>
		<input type="submit" name="btnguardar" value="guardar">
	</form>

	<br><br>
<table border ="1">
	<thead>
		<th>Nombre</th>
		<th>Cantidad</th>
		<th>Estado</th>
		<th>Valor Entrada</th>

	</thead>
	<tbody>
		<?php 
		    global $conexion;
		    $sql2 = "SELECT * FROM productos";
		    $ejecutar2 = $conexion->query($sql2);
		    while ($row = mysqli_fetch_object($ejecutar2)){
		    	echo '<tr>
		    	         <td>'.$row->nombre.'</td>
		    	         <td>'.$row->cantidad.'</td>
		    	         <td>'.$row->estado.'</td>
		    	         <td>'.$row->valorEntrada.'</td>
		    	</tr>';
		    }

		?>
		
	</tbody>

</table>
<br><br>
<body>
    <form action="">
        <label for="hora">
            <span>hora</span>
            <input type="time" id="hora" name="hora" />
        </label>  <label for="dia">
            <span>Día</span>
            <input type="date" id="dia" name="dia" />
        </label>  <label for="semana">
            <span>Semana</span>
            <input type="week" id="semana" name="semana" />
        </label>  <label for="mes">
            <span>Mes</span>
            <input type="month" id="mes" name="mes" />
        </label>
        <input type="submit"/>
      
    </form>
     <br><br>
<form action="">
        <label for="calendario">
            <span>calendario</span>
            <input type="datetime-local" id="calendario" name="calendario"> 
        </label>
        <input type="submit"/>
    </form>
    <form action="">
            <label for="nombre">
                <span>¿Cual es tu nombre?</span>
                <input type="text" name="nombre" id="nombre" autocomplete="name" placeholder="tu nombre" required/>
            </label> 
            <label for="correo">
                <span>¿cual es tu correo?</span>
                <input type="email" name="correo" id="correo" autocomplete="email" required/>
            </label> 
            <label for="apis">
                <span>¿En que país vives?</span>
                <input type="text" name="pais" id="pais" autocomplete="country" required/>
            </label> 
            <label for="cp">
                <span>¿Cual es tu codigo postal?</span>
                <input type="text" name="cp" id="cp" autocomplete="postal-code" required/> 
            </label>
            <br><br>
            <input type="submit"/>
            <input list="cursos">
            <datalist id="cursos">
            <option value="Java Script"></option>
            <option value="HTML5"></option>
            <option value="CSS3"></option>
            <option value="Web Standards"></option>
            </datalist>

</body>

</html>
