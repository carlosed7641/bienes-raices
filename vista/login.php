<?php

    //Importar conexión
    require '../modelo/includes/config/database.php';
    $db = conectarDB();
    //Autenticar el usuario


    $errores = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        } 
        if(!$password) {
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)) {
            //Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($db, $query);

            if($resultado->num_rows) {
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar si el password es correcto
                $auth = password_verify($password, $usuario['password']);

                if($password  == $usuario['password']) {
                    //El usuario está autenticado
                    session_start();
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /bienesraices/controlador/admin');
                }else {
                    $errores[] = "El password es incorrecto";
                }

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }



    //Incluye el Header
    require '../modelo/includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h3>Iniciar Sesión</h3>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
         </div>
    <?php endforeach; ?>


    <form method="POST" class="formulario">
    <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" placeholder="Tu e-mail">

                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Tu password">
            </fieldset>
     <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer');?>

   