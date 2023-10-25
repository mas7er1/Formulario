<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-box">
        <p>Ingresar</p>
          <?php 
          include("conexion.php");
          include("controlador.php");
    
          ?>
        <form method="post">
          <div class="user-box">
            <input required="" name="usuario" type="text">
            <label>Usuario</label>
          </div>
          <div class="user-box">
            <input required="" name="password" type="password">
            <label>Contraseña</label>
          </div>
          <input type="submit" value="Enviar" name="btningresar">
        </form>
        <!--<p>Don't have an account? <a href="" class="a2">Sign up!</a></p>-->
      </div>
</body>
</html>