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
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>


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
             <form method="POST" action="php/R_estanque.php">
            <div class="app-title">

                <h1><i class="fa fa-dashboard"></i>Registro de estanque</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                                <div>
                <label for="exampleInputPassword1"> Latitud </label>
                <td><input type="number" name="uno" placeholder="Ingrese latitud" class="form-control" required></td>
            </div>

            <div>
                <label for="exampleInputPassword1"> Longitud </label>
                <td><input type="text" name="dos" placeholder="Ingrese longitud" class="form-control" required></td>
            </div>

            <div>
                <label for="exampleInputPassword1"> Area </label>
                <td><input type="text" name="tres" placeholder="Ingrese area" class="form-control" required></td>
            </div>

                </div>
                <div class="col-md-6">
                <div>
                    <label for="exampleInputPassword1">Capacidad</label>
                    <td><input type="gmail" name="cuatro" placeholder="Ingrese capacidad" class="form-control" required></td>
                </div>
                <div>
                    <label for="exampleInputPassword1"> Bateria </label>
                <select class="form-control"name="cinco" id="" >
                <option>Seleccione bateria</option>
           <?php 
           try{

            $query="SELECT * from bateria";
            $data=$base->prepare($query);
            $data->execute();

            while( $row=$data->fetch(PDO::FETCH_ASSOC)){
             echo"<option value=".$row["id_bateria"]."'>".$row["nombre_bateria"]." </option>";                                   

           }
         }
         catch(exception $e){
          die('error ->'.$e->getMessage());

        }

        ?>
      </select>
                </div>
                <div>
                    <label for="exampleInputPassword1"> Tipo de estanque </label>
                    <td>
                        <select class="form-control" name="seis" id="">
                            <option>Seleccione tipo de estanque</option>
                            <option>Estanque</option>
                            <option>Reservorio</option>
                        </select>
                    </td>
                </div>
                </div>
            </div>
                <br>
                <div>
                    <td>
                       <center><input type="submit" name="btn1" class="btn btn-primary" value="Registrar estanque"></center> 
                    </td>
                </div>
        </form>
            <!---
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Herney</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Sales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Features</h3>
            <ul>
              <li>Built with Bootstrap 4, SASS and PUG.js</li>
              <li>Fully responsive and modular code</li>
              <li>Seven pages including login, user profile and print friendly invoice page</li>
              <li>Smart integration of forgot password on login page</li>
              <li>Chart.js integration to display responsive charts</li>
              <li>Widgets to effectively display statistics</li>
              <li>Data tables with sort, search and paginate functionality</li>
              <li>Custom form elements like toggle buttons, auto-complete, tags and date-picker</li>
              <li>A inbuilt toast library for providing meaningful response messages to user's actions</li>
            </ul>
            <p>Vali is a free and responsive admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.</p>
            <p>Vali is is light-weight, expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme colors and functionality.</p>
            <p class="mt-4 mb-4"><a class="btn btn-primary mr-2 mb-2" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Compatibility with frameworks</h3>
            <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
            <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
            <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
          </div>
        </div>
      </div>
  </main>-->
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
  <script type="text/javascript">
    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
        {
           label: "My First dataset",
           fillColor: "rgba(220,220,220,0.2)",
           strokeColor: "rgba(220,220,220,1)",
           pointColor: "rgba(220,220,220,1)",
           pointStrokeColor: "#fff",
           pointHighlightFill: "#fff",
           pointHighlightStroke: "rgba(220,220,220,1)",
           data: [65, 59, 80, 81, 56]
       },
       {
           label: "My Second dataset",
           fillColor: "rgba(151,187,205,0.2)",
           strokeColor: "rgba(151,187,205,1)",
           pointColor: "rgba(151,187,205,1)",
           pointStrokeColor: "#fff",
           pointHighlightFill: "#fff",
           pointHighlightStroke: "rgba(151,187,205,1)",
           data: [28, 48, 40, 19, 86]
       }
       ]
   };
   var pdata = [
   {
      value: 300,
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "Complete"
  },
  {
      value: 50,
      color:"#F7464A",
      highlight: "#FF5A5E",
      label: "In-Progress"
  }
  
  
</script>
  </body>
  </html>