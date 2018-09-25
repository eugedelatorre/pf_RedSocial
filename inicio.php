<?php
$title = "Felicitrip - para el viajero que hay en vos";
$mainTitle = "Felicitrip";
$nombre = "";
$apellido = "";
$email = "";
$userName = "";


 ?>



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width">
     <title><?php echo $title; ?></title>
     <link rel="stylesheet" href="css/styles.css">
     <link href="https://fonts.googleapis.com/css?family=Bad+Script|Roboto" rel="stylesheet">
   </head>
   <body>

    <header>
      <div class="logoTitle">
        <a class="logoTitle"href="inicio.php">
          <img src="images/logo.png" alt="Felicitrip Logo" class="mainLogo">
          <h1 class="mainTitle"><?php echo $mainTitle ?></h1>
        </a>
      </div>
    </header>

    <div class="contenedor-principal">
      <article class="info">
        <h2>Conectate con otros viajeros para vivir nuevas experiencias sin fronteras</h2>

        <img src="" alt="imagen ciudad">
      </article>
      <article class="formulario">
        <form class="login" action="" method="post" enctype="multipart/form-data">
          <h2>Ingresa a tu cuenta</h2>

          <input type="email" placeholder="Email" name="email" value="<?php echo $email ?>">

          <!--
          <input type="text" placeholder="Nombre de usuario" name="userName" value="<?php echo $userName ?>">
          <br> -->

          <input type="password" placeholder="Contraseña" name="password">

          <button type="submit" name="">Ingresar</button>

         <a href="#">¿Has olvidado la contraseña?</a>

        </form>
      </article>
      <article class="newUser">
        <p>¿Nuev@ viajer@? <a href="registro.php">Registrate</a></p>
      </article>

    </div>





   </body>
 </html>
