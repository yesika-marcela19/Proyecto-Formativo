
<!DOCTYPE html>
<html lang="en">
<head>

    <meta content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." name="description">
    <meta content="summary_large_image" property="twitter:card">
    <meta content="@pratikborsadiya" property="twitter:site">
    <meta content="@pratikborsadiya" property="twitter:creator">
    <meta content="website" property="og:type">
    <meta content="Vali Admin" property="og:site_name">
    <meta content="Vali - Free Bootstrap 4 admin theme" property="og:title">
    <meta content="http://pratikborsadiya.in/blog/vali-admin" property="og:url">
    <meta content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png" property="og:image">
    <meta content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." property="og:description">
    <title>Aqua</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/logo.png"/>
    
    <?php
    include 'php/conect.php';
    session_start();  
    ?>
</head>
<body class="app sidebar-mini rtl">
   
     <!-- Navbar-->
        <header class="app-header">
        <a class="app-header__logo" href="principal.php">
          <img src="../img/logo2.png" width="90">
      </a>
      <!-- Sidebar toggle button-->
      <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#">
      </a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" placeholder="Buscar" type="search">
            <button class="app-search__button">
                <i class="fa fa-search">
                </i>
            </button>

        </li>
        <!--Notification Menu-->
        <li class="dropdown">
            <a aria-label="Show notifications" class="app-nav__item" data-toggle="dropdown" href="#">
                <i class="fa fa-user-plus fa-lg">
                </i>
            </a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li class="app-notification__title">
                  Agregar nuevo 
              </li>
              <div class="app-notification__content">
                <li>
                    <a class="app-notification__item" href="agregar_administrador.php">
                        <span class="app-notification__icon">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary">
                                </i>
                                <i class="fa fa-user fa-stack-1x fa-inverse">
                                </i>
                            </span>
                        </span>
                        <div>
                            <p >
                                Administrador
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="app-notification__item" href="agregar_operario.php">
                        <span class="app-notification__icon">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-danger">
                                </i>
                                <i class="fa fa-user-o fa-stack-1x fa-inverse">
                                </i>
                            </span>
                        </span>
                        <div>
                            <p class="app-notification__message">
                              Operaio
                          </p>  
                      </div>
                  </a>
              </li>
              <center><a href="# "> Cerrar</a></center>
          </li>
      </ul>
  </li>
  <li class="dropdown">
    <a aria-label="Show notifications" class="app-nav__item" data-toggle="dropdown" href="#">
        <i class="fa fa-bell-o fa-lg">
  <?php 

            try{

                $nu=0;
                $sql="SELECT * FROM actividad";
                $resul=$base->prepare($sql);
                $resul->execute(array());
                $fila=$resul->rowCount();
                while($consulta=$resul->fetch(PDO::FETCH_ASSOC)){
                    if($consulta['notificacion']=="no"){    
                        $nu=$nu+1;
                    }
                }
                ?>
                <span>  <?php
                if($fila>0){
                 echo "$nu" ?>  </span>    
                 <?php
             }
         }
         catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
        ?>

    </i>
</a>
<ul class="app-notification dropdown-menu dropdown-menu-right">
    
 <div class="app-notification__content">
    <a href="lista.php "  class="app-notification__item  " >
            
    <li > <center>Ver todas las notificaciones</center>  
        
</li>
 </a>
                              
                
    

</div>
</div>

</ul>
</li> 
<!-- User Menu-->
<li class="dropdown">
    <a aria-label="Open Profile Menu" class="app-nav__item" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-lg">
        </i>
    </a>
    <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li>
          <?php 

          if(isset($_SESSION['usuario']))
          {
              ?>  

              <a class="dropdown-item" href="salir.php">
                <i class="fa fa-sign-out fa-lg">
                </i>

                Salir
            </a>
            <?php
            
            
            if(isset($_POST['btn_cerrar']))
            {
                ?>
                <script language='javascript'>window.location="salir.php"</script>
                <?php
            }
            ?>
        </li>


        
    </ul>
</li>
</ul>
</header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar">
    </div>


<!--ASIDE----------------------------------------------------------------------------------------------------------------------------->
<aside class="app-sidebar">
    <div class="app-sidebar__user">  
        <div>
            <?php
            ?> 
            <p class="app-sidebar__user-name">                  
                <?php echo ' '.$_SESSION['nombre']. ' ' ; ?>              
            </p>
            <p class="app-sidebar__user-designation">
                <?php echo ' '.$_SESSION['nombre_rol']. ' ' ; ?>  
            </p>
            <?php
        }
        else{                   
          ?>
          <script language='javascript'>window.location="salir.php"</script>
          <?php                                                
      }
      ?>
  </div>
</div>
<ul class="app-menu">
 <li><a class="app-menu__item active" href="principal.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
 <li class="treeview">
    <a class="app-menu__item" data-toggle="treeview" href="#">
        <i class="app-menu__icon fa fa-plus-circle">
        </i>
        <span class="app-menu__label">
            Registrar
        </span>
        <i class="treeview-indicator fa fa-angle-right">
        </i>
    </a>
    <ul class="treeview-menu">
        <li>
            <a class="treeview-item" href="alimentacion.php">
                <i class="icon fa fa-circle-o">
                </i>
                Alimentación
            </a>
        </li>
        <li>
            <a class="treeview-item" href="rotacion.php">
                <i class="icon fa fa-circle-o">
                </i>
                Rotación
            </a>
        </li>
        <li>
            <a class="treeview-item" href="muestreo.php">
                <i class="icon fa fa-circle-o">
                </i>
                Muestreo
            </a>
        </li>
        <li>
            <a class="treeview-item" href="produccion.php">
                <i class="icon fa fa-circle-o">
                </i>
                Producción
            </a>
        </li>
        <li>
            <a class="treeview-item" href="pesca.php">
                <i class="icon fa fa-circle-o">
                </i>
                Pesca
            </a>
        </li>
        <li>
            <a class="treeview-item" href="mortalidad.php">
                <i class="icon fa fa-circle-o">
                </i>
                Mortalidad
            </a>
        </li>
        <li>
            <a class="treeview-item" href="agregar_bateria.php"><i class="icon fa fa-circle-o"></i>Bateria</a>
        </li>
        <li>
            <a class="treeview-item" href="agregar_lote.php"><i class="icon fa fa-circle-o"></i>Lote</a>
        </li>
        <li>
            <a class="treeview-item" href="registro_ciclo_vida.php"><i class="icon fa fa-circle-o"></i>Ciclo de vida</a>
        </li>
        <li>
            <a class="treeview-item" href="agregar_estanque.php">
                <i class="icon fa fa-circle-o">
                </i>
                Estanque
            </a>
        </li>

    </ul>
</li>
<li class="treeview">
    <a class="app-menu__item" data-toggle="treeview" href="#">
        <i class="app-menu__icon fa fa-edit">
        </i>
        <span class="app-menu__label">
            Reportes
        </span>
        <i class="treeview-indicator fa fa-angle-right">
        </i>
    </a>
    <ul class="treeview-menu">
        <li>
            <a class="treeview-item" href="consulta_alimentacion.php">
                <i class="icon fa fa-circle-o">
                </i>
                Alimentación
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_rotacion.php">
                <i class="icon fa fa-circle-o">
                </i>
                Rotación
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_muestreo.php">
                <i class="icon fa fa-circle-o">
                </i>
                Muestreo
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_pesca.php">
                <i class="icon fa fa-circle-o">
                </i>
                Pesca
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_produccion.php">
                <i class="icon fa fa-circle-o">
                </i>
                Producción
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_mortalidad.php">
                <i class="icon fa fa-circle-o">
                </i>
                Mortalidad
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_lote.php">
                <i class="icon fa fa-circle-o">
                </i>
                Lotes
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_ciclo_vida.php">
                <i class="icon fa fa-circle-o">
                </i>
                Ciclo vida
            </a>
        </li>
    </ul>
</li>
<li class="treeview">
    <a class="app-menu__item" data-toggle="treeview" href="#">
        <i class="app-menu__icon fa fa-user-circle-o">
        </i>
        <span class="app-menu__label">
            Consultar
        </span>
        <i class="treeview-indicator fa fa-angle-right">
        </i>
    </a>
    <ul class="treeview-menu">
        <li>
            <a class="treeview-item" href="consulta_administrador.php">
                <i class="icon fa fa-circle-o">
                </i>
                Administrador
            </a>
        </li>
        <li>
            <a class="treeview-item" href="consulta_operario.php">
                <i class="icon fa fa-circle-o">
                </i>
                Operario
            </a>
        </li>
        <li><a class="treeview-item" href="consulta_inactivos.php"><i class="icon fa fa-circle-o"></i> Inactivos</a></li>
        <li>
            <a class="treeview-item" href="consulta_estado_estanque.php">
                <i class="icon fa fa-circle-o"></i>Estanque
            </a>
        </li>

    </ul>
</li>

</ul>
</aside>
<!-- FINAL ASIDE----------------------------------------------------------------------------------------------------------------------------->


<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Mortalidad registrada</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
  </ul>
</div>
<div  class="row d-flex justify-content-center">
    <div class="col-lg-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-responsive " id="sampleTable">
            <thead>
              <tr>
                <th>Semana</th>
                <th>Consumo diario</th>
                <th>Consumo semanal</th>
                <th>Biomasa</th>
                <th>Peso Minimo</th>
                <th>Peso Maximo</th>
                <th>Especie</th>
                <th>Alimento</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
          <?php
          try{
            $sql="SELECT  * FROM ciclo_vida inner join tipo_especie on (fk_tipo_especie=id_tipo_especie)
            inner join tipo_alimentacion on (fk_tipo_alimentacion=id_tipo_alimentacion)";
            $resul=$base->prepare($sql);
            $resul->execute(array());
            while($consulta=$resul->fetch(PDO::FETCH_ASSOC)){
              ?>
              <tr>	 							 						
                <th><?php echo$consulta['semana'];?></th>
                <td><?php echo$consulta['consumo_diario'];?></td>
                <td><?php echo$consulta['consumo_semanal'];?></td>
                <td><?php echo$consulta['biomasa'];?></td>
                <td><?php echo$consulta['peso_min'];?></td>
                <td><?php echo$consulta['peso_max'];?></td>	
                <td><?php echo$consulta['nombre_especie'];?></td>
                <td><?php echo$consulta['nombre_alimentacion'];?></td>	 
                 <td ><a class="btn btn-primary edit" style="width:100px;" href="actualizar_ciclo_vida.php?enviar=<?php echo $consulta['id_ciclo_vida']?>"><i class='material-icons' >Actualizar</i></a></td> 						
            </tr>
            <?php
        }
    }
    catch(Exception $e){
       die('Error:' .$e->getMessage());
   }
   ?>


</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
<!-- Essential javascripts for application to work-->
 <script src="../js/jquery-3.2.1.min.js">
  </script>
  <script src="../js/popper.min.js">
  </script>
  <script src="../js/bootstrap.min.js">
  </script>
  <script src="../js/main.js">
  </script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="../js/plugins/pace.min.js">
  </script>
  <!-- Page specific javascripts-->
  <script src="../js/plugins/chart.js" type="text/javascript">
  </script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
   ga('create', 'UA-72504830-1', 'auto');
   ga('send', 'pageview');
}
</script>
</body>
</html>