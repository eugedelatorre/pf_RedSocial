<?php
include("config.php");
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


      <div class="logoTitle">
        <a class="logoTitle"href="inicio.php">
          <img src= <?php echo $logo ?> alt="Felicitrip Logo" class="mainLogo">
          <h1 class="mainTitle"><?php echo $mainTitle ?></h1>
        </a>
      </div>


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
              <span><?php echo $errorNombre; ?></span>
            <input type="text" placeholder="Apellido" name="apellido" value="<?php echo $apellido ?>">
              <span><?php echo $errorApellido; ?></span>
          </div>

          <input type="text" placeholder="Email" name="email" value="<?php echo $email ?>">
            <span><?php echo $errorEmail; ?></span>
          <select class="paisUsuario" name="paisUsuario">
            <option value=0>Seleccione un País</option>
            <?php
              foreach ($paises as $pais) {?>
            <option value="<?php echo $pais;?>"><?php echo $pais;?></option>
            <?php } ?>
          </select>
            <span><?php echo $errorPais; ?></span>

          <input type="text" placeholder="Nombre de usuario" name="userName" value="<?php echo $userName ?>">
            <span><?php echo $errorUserName; ?></span>
          <br>


          <div class="upload">

            <label class="labelAvatar" for="avatar">Sube tu avatar</label>
            <input type="file" id="avatar" name="foto">
              <span><?php echo $errorImg; ?></span>
          </div>


          <input type="password" placeholder="Ingresa tu contraseña" name="contrasena">
            <span><?php echo $errorContrasena; ?></span>

          <input type="password" placeholder="Repite tu contraseña" name="checkContrasena">
            <span><?php echo $errorCheckContrasena; ?></span>

          <button type="submit" name="">Registrate</button>


        </form>
      </article>

      <article class="etiqueta">
        <p>¿Tienes una cuenta? <a href="inicio.php">Entrar</a></p>
      </article>




    </div>





   </body>
 </html>
