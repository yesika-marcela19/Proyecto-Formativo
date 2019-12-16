<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
    <meta content="width=device-width, initial-scale=1" name="viewport"></meta>
    <link href="docs/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/logo.png"/>
    <title> Iniciar sesion  </title>      
</head>
<body>

    <section class="material-half-bg">
        <div class="cover">
        </div>
    </section>
    <section class="login-content">

        <div class="login-box">
            <form action=" " class="login-form" method="POST">
               <div class="logo" align="center">
                <h1><img src="img/logo.png" width="100"></h1>
            </div>
            <div class="form-group">
                <label class="control-label">Usuario</label>                        
                <input autofocus="" class="form-control" placeholder="Correo" type="text" name="usuario"> </input>                     
            </div> 
            <div class="form-group">
                <label class="control-label">Contraseña</label>
                <input class="form-control" placeholder="Contraseña" type="password" name="password"></input>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block" name="btn">
                    <i class="fa fa-sign-in fa-lg fa-fw"> </i>
                    Iniciar
                </button>
            </div>
        </form>
        <?php  
        include('docs/operario/php/conect.php');
        session_start();
        if(isset($_POST['btn']))
        {
            if(empty($_POST['usuario']) || empty($_POST['password']))
            {
                ?>
                <script type="text/javascript">window.alert("Campos Obligatorios")</script>
                <?php
            }
            else
            {
                $sql= "SELECT  * FROM  persona inner join rol on (id_rol=fk_rol) WHERE login=:usuario AND pasword=:contrasena ";
                $resultado=$base->prepare($sql);
                $resultado->execute(array(":usuario"=>$_POST['usuario'],":contrasena"=>$_POST['password']));
                $consulta= $resultado-> fetch(PDO:: FETCH_ASSOC);             
                $contador= $resultado->rowCount();

                if($contador > 0)
                {
                    $_SESSION['nombre'] = $consulta['nombre'];
                    $_SESSION['id_persona'] = $consulta['id_persona'];
                    $_SESSION['fk_rol']= $consulta['fk_rol'];
                    $_SESSION['nombre_rol']= $consulta['nombre_rol'];
                    $_SESSION['usuario']= $_POST['usuario'];
                    $_SESSION['estado_pers'] = $consulta['estado_pers'];

                    if ($_SESSION['estado_pers']=='0') {

                        ?> <script type="text/javascript" >window.alert("estado inactivo")</script> <?php
                    }
                    else{
                        if ( $_SESSION['fk_rol']==1) {

                            header("location:docs/administrador/principal.php");  
                        }
                        else{
                            header("location:docs/operario/principal.php");  

                        } 
                    } 

                }
                else
                {
                    ?>
                    <script type="text/javascript" >window.alert("Datos incorrectos por favor intente de nuevo")</script>
                    <?php
                }
            }
        }
        ?>   

    </div>
</section> 
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js">
</script>
<script src="js/popper.min.js">
</script>
<script src="js/bootstrap.min.js">
</script>
<script src="js/main.js">
</script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js">
</script>
<script type="text/javascript">
            // Login Page Flipbox control
            $('.login-content [data-toggle="flip"]').click(function() {
                $('.login-box').toggleClass('flipped');
                return false;
            });
        </script>
    </body>
    </html>