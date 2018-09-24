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
        <img src="images/logo.png" alt="Felicitrip Logo" class="mainLogo">
        <h1 class="mainTitle"><?php echo $mainTitle ?></h1>
      </div>
    </header>

    <div class="contenedor-principal">
      <article class="info">
        <h2>Conectate con otros viajeros para vivir nuevas experiencias sin fronteras</h2>

        <img src="" alt="imagen ciudad">
      </article>
      <article class="formulario">
        <form class="registro" action="" method="post" enctype="multipart/form-data">
          <h2>Crea tu cuenta</h2>
          <p>Conectate con otr@s viajer@s para vivir nuevas experiencias sin fronteras.</p>
          <div class="fullname">
            <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $nombre ?>">

            <input type="text" placeholder="Apellido" name="apellido" value="<?php echo $apellido ?>">

          </div>


          <input type="email" placeholder="Email" name="email" value="<?php echo $email ?>">



          <select class="paisUsuario" name="paisUsuario">
            <option value=0>Selecciona un país</option>
            <option value=1>Argentina</option>
            <option value=2>brasil</option>
          </select>



          <input type="text" placeholder="Nombre de usuario" name="userName" value="<?php echo $userName ?>">
          <br>


          <div class="upload">

            <label class="labelAvatar" for="avatar">Sube tu avatar</label>
            <input type="file" id="avatar" name="foto">

          </div>


          <input type="password" placeholder="Ingresa tu contraseña" name="password">


          <input type="password" placeholder="Repite tu contraseña" name="repeatPassword">

          <button type="submit" name="">Registrate</button>

          <p>¿Tienes una cuenta? <a href="#">Entrar</a></p>

        </form>
      </article>
    </div>





   </body>
 </html>
