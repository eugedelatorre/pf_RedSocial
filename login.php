<?php
$errorEmail = "";
$errorContrasena = "";
$email = "";

//****************Log In***********
if($_POST){
  //var_dump($_POST);
  //var_dump($_FILES);
  //****************CONFIGURACION DE VARIABLES***********
  $email = trim($_POST['email']);
  $contrasena = trim($_POST['contrasena']);

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorEmail = "Ingresa un email valido";
    }elseif(empty ($email)){
      $errorEmail = "El email es obligatorio";
    }
  if(empty($contrasena) || strlen($contrasena) < 6){
    $errorContrasena = "La contraseña debe tener 6 caracteres minimo.";
    }
  if(empty($errorEmail) && empty($errorContrasena)){
    header('location:inicio.php');
  }
}

$title = "Felicitrip Login - para el viajero que hay en vos";
$mainTitle = "Felicitrip";

require_once ('head.php');

?>

  <body class="site-wrapper">

   <?php require_once('header.php'); ?>
   <main>

    <div class="contenedor-principal">
      <article class="info">
        <h2>Conectate con otros viajeros para vivir nuevas experiencias sin fronteras</h2>
        <img src="" alt="imagen ciudad">
      </article>
      <article class="formulario">
        <form class="login" action="" method="post" enctype="multipart/form-data">
          <h2>Ingresa a tu cuenta</h2>
          <input type="text" placeholder="Email" name="email" value="<?php echo $email ?>">
            <span><?php echo $errorEmail; ?></span>
          <input type="password" placeholder="Contraseña" name="contrasena">
            <span><?php echo $errorContrasena; ?></span>
          <button type="submit" name="">Ingresar</button>
         <a href="#">¿Has olvidado la contraseña?</a>
        </form>
      </article>
      <article class="etiqueta">
        <p>¿Nuev@ viajer@? <a href="registro.php">Registrate</a></p>
      </article>
    </div>



  <?php require_once('footer.php'); ?>

  </main>
  </body>

 </html>
