<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'php/conect.php';?>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>Data Table - Vali Admin</title>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    function ConfirmarUpdate() {
      var confirmar = confirm("¿Realmente desea desabilitar a esta persona? ");
      if (confirmar) {
        return true;
      } else {
        return false;
      }
    }
  </script>
  <script>

    function alerta() {
      var confirmar = confirm("¿Realmente desea actualizar a esta persona? ");
      if (confirmar) {
        return true;
      } else {
        return false;
      }
    }
  </script>
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!--Notification Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
        <ul class="app-notification dropdown-menu dropdown-menu-right">
          <li class="app-notification__title">You have 4 new notifications.</li>
          <div class="app-notification__content">
            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
              <div>
                <p class="app-notification__message">Lisa sent you a mail</p>
                <p class="app-notification__meta">2 min ago</p>
              </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                <div>
                  <p class="app-notification__message">Mail server not working</p>
                  <p class="app-notification__meta">5 min ago</p>
                </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
                  <div class="app-notification__content">
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div>
                        <p class="app-notification__message">Lisa sent you a mail</p>
                        <p class="app-notification__meta">2 min ago</p>
                      </div></a></li>
                      <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                          <p class="app-notification__message">Mail server not working</p>
                          <p class="app-notification__meta">5 min ago</p>
                        </div></a></li>
                        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                          <div>
                            <p class="app-notification__message">Transaction complete</p>
                            <p class="app-notification__meta">2 days ago</p>
                          </div></a></li>
                        </div>
                      </div>
                      <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                    </ul>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                      <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </header>
              <!-- Sidebar menu-->
              <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
              <aside class="app-sidebar">
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
                  <div>
                    <p class="app-sidebar__user-name">John Doe</p>
                    <p class="app-sidebar__user-designation">Frontend Developer</p>
                  </div>
                </div>
                <ul class="app-menu">
                  <li><a class="app-menu__item active" href="principal.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
                  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Actividades</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                     <!-- <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>Actividades</a></li>--->
                     <li><a class="treeview-item" href="alimentacion.php" ><i class="icon fa fa-circle-o"></i> Alimentacion</a></li>
                     <li><a class="treeview-item" href="rotacion.php"><i class="icon fa fa-circle-o"></i> Rotacion</a></li>
                     <li><a class="treeview-item" href="muestreo.php"><i class="icon fa fa-circle-o"></i> Muestreo</a></li>
                     <li><a class="treeview-item" href="produccion.php"><i class="icon fa fa-circle-o"></i> Produccion </a></li>
                     <li><a class="treeview-item" href="pesca.php"><i class="icon fa fa-circle-o"></i> Pesca</a></li>
                     <li><a class="treeview-item" href="mortalidad.php"><i class="icon fa fa-circle-o"></i>Mortalidad</a></li>
                   </ul>
                 </li>
                 <!---  <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>--->
                 <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a class="treeview-item" href="consulta_alimentacion.php"><i class="icon fa fa-circle-o"></i>Alimentacion</a></li>
                    <li><a class="treeview-item" href="consulta_rotacion.php"><i class="icon fa fa-circle-o"></i> Rotacion</a></li>
                    <li><a class="treeview-item" href="consulta_muestreo.php"><i class="icon fa fa-circle-o"></i> Muestreo</a></li>
                    <li><a class="treeview-item" href="consulta_pesca.php"><i class="icon fa fa-circle-o"></i>Pesca</a></li>
                    <li><a class="treeview-item" href="consulta_produccion.php"><i class="icon fa fa-circle-o"></i>Produccion</a></li>
                    <li><a class="treeview-item" href="consulta_mortalidad.php"><i class="icon fa fa-circle-o"></i>Mortalida</a></li>
                  </ul>
                </li>
                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Administrar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a class="treeview-item" href="Consulta_administrador.php"><i class="icon fa fa-circle-o"></i> Administrador</a></li>
                    <li><a class="treeview-item" href="Consulta_operario.php"><i class="icon fa fa-circle-o"></i> Operario</a></li>
                    <li><a class="treeview-item" href="agregar_nuevo_usuario.php"><i class="icon fa fa-circle-o"></i> Agregar nuevo</a></li>

                  </ul>
                </li>

              </ul>
            </aside>
            <main class="app-content">
              <form method="GET"></form>
              <div class="app-title">
                <div>
                  <h1><i class="fa fa-th-list"></i> Operarios</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                </ul>
              </div>
              <div  class="row d-flex justify-content-center">
                <div class="col-lg-12">
                  <div class="tile">
                    <div class="tile-body">
                      <table class="table table-hover table-bordered " id="sampleTable">
                        <thead>
                          <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Telefono</th>

                            <th>Estado</th>
                            <th>Eliinar</th>
                            <th>Actualizar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          try{
                            $sql="SELECT  * FROM  persona where fk_rol=2 and estado_pers=1" ;
                            $resul=$base->prepare($sql);
                            $resul->execute(array());
                            while($consulta=$resul->fetch(PDO::FETCH_ASSOC)){
                              ?>   <tr>                           
                                <th>
                                  <span id="id_persona<?php echo$consulta['id_persona'];?>"><?php echo$consulta['id_persona'];?></span>
                                </th>

                                <th>
                                  <span id="nombre<?php echo$consulta['id_persona'];?>"><?php echo$consulta['nombre'];?></span>
                                </th>
                                <th>
                                  <span id="fk_rol<?php echo$consulta['id_persona'];?>"><?php echo$consulta['fk_rol'];?></span>
                                </th>
                                <th>
                                  <span id="telefono<?php echo$consulta['id_persona'];?>"><?php echo$consulta['telefono'];?></span>
                                </th>

                                <th>
                                  <span id="estado_pers<?php echo$consulta['id_persona'];?>"><?php echo$consulta['estado_pers'];?></span>
                                </th>




                                <td ><a class="btn btn-success edit" onclick='return ConfirmarUpdate();'href="php/desabilitar_operario.php?cod=<?php echo $consulta['id_persona']?>"><i class='material-icons' title=Actualizar Registro>Desabilitar</i></a></button></td>



                                <td ><a class="btn btn-success edit" onclick='return alerta();'href="actualizar_datos_usuarios.php?cod=<?php echo $consulta['id_persona']?>"><i class='material-icons' title=Actualizar Registro>
                                Actualizar</i></a></button></td>


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
             <!---------------------------------------->


           </main>
           <!-- Essential javascripts for application to work-->
           <script src="js/jquery-3.2.1.min.js"></script>
           <script src="js/popper.min.js"></script>
           <script src="js/bootstrap.min.js"></script>
           <script src="js/main.js"></script>
           <!-- The javascript plugin to display page loading on top-->
           <script src="js/plugins/pace.min.js"></script>
           <!-- Page specific javascripts-->
           <!-- Data table plugin-->
           <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
           <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
           <script type="text/javascript">$('#sampleTable').DataTable();</script>
           <!-- Google analytics script-->

         </body>

         </html>