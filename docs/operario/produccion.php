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
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../img/logo.png"/>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        
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

                          <a class="dropdown-item" href="salir.php"><i class="fa fa-sign-out fa-lg"></i>Salir</a>
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

    
 <aside class="app-sidebar">
        <div class="app-sidebar__user">  
            <div>
            <?php
                ?> 
                <p class="app-sidebar__user-name">                  
                    <?php echo ''.$_SESSION['nombre']. ' ' ; ?>              
                </p>
                <p class="app-sidebar__user-designation">
                    <?php echo ''.$_SESSION['nombre_rol']. ' ' ; ?>  
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
            <li>
                <li><a class="app-menu__item active" href="principal.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
            </li>
            <li class="treeview">
                <a class="app-menu__item" data-toggle="treeview" href="#">
                    <i class="app-menu__icon fa fa-laptop">
                    </i>
                    <span class="app-menu__label">
                        Registrar
                    </span>
                    <i class="treeview-indicator fa fa-angle-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <!-- <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>Actividades</a></li>-->
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
                </ul>
            </li>
            <!--  <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>-->
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
                        <a class="treeview-item" href="consulta_estado_estanque.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Estanques
                        </a>
                    </li>
               
                </ul>
            </li>
            
        </ul>
    </aside>

    
 <main class="app-content">           
  <div class="app-title">
    <h1><i class="fa fa-dashboard"></i>Registro de producción</h1>
</div>  
<div class="row">
    <div class="col-md-6">
      <form action="php/R_produccion.php?cod" method="POST"> 
        <div>
          <label for="exampleInputPassword1">Cantidad</label>
          <td><input type="number" name="cantidad" placeholder="Ingrese cantidad"  class="form-control" required></td>
      </div>
      <div>
          <label for="exampleInputPassword1">Descripción</label>
          <td><input type="text" name="descripcion" placeholder="Ingrese descripcion"  class="form-control" required></td>
      </div>
      <div>
          <label for="exampleInputPassword1">Fecha</label>
          <input type="Date" name="fecha" placeholder="Ingrese fecha"  class="form-control" required>
      </div>
      <div>
          <label for="">Seleccione estanque</label>
          <select  name="estanque" id="estanque"  class="form-control" required>
            <?php 
            try
            {

                $query="SELECT estanque FROM calcular_alimentacion_semana_actual";
                $data=$base->prepare($query);
                $data->execute();
                while( $row=$data->fetch(PDO::FETCH_ASSOC)){
                    echo"<option value=".$row["estanque"].">".$row["estanque"]." </option>";                                   
                }
            }
            catch(exception $e)
            {
                die('error ->'.$e->getMessage());
            }
            ?>
        </select>
    </div>
    <div id="lote"> </div>
<div>
    <br>
    <center><input class="btn btn-primary" type="submit" name="btn1" value="Registrar producción" ></center>
</div>
</form>
</div>

<div class="col-md-6">
  <div class="tile">
    <div class="tile-body">
      <table class="table table-hover table-bordered " id="sampleTable">
        <thead>
          <tr>
            <th>Lote </th>
            <th>Cantidad</th>
            <th>Especie</th>
            <th>Semana</th>
           
        </tr>
    </thead>
    <tbody>
      <?php
      try{
        $sql="SELECT id_lote ,nombre_especie,semana,cantidad,fecha_actual from calcular_alimentacion_semana_actual group by  id_lote ";

        $resul=$base->prepare($sql);
        $resul->execute(array());
        while($consulta=$resul->fetch(PDO::FETCH_ASSOC)){
          ?>
          <tr>                            
            <th><?php echo$consulta['id_lote'];?></th>
            <th><?php echo$consulta['cantidad'];?></th>
            <td><?php echo$consulta['nombre_especie'];?></td>
            <td><?php echo$consulta['semana'];?></td>
                    
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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/chart.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        recargarLista();

        $('#estanque').change(function(){
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista(){
        $.ajax({
            type:"POST",
            url:"datos.php",
            data:"contiene=" + $('#estanque').val(),
            success:function(r){
                $('#lote').html(r);
            }
        });
    }
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
]

var ctxl = $("#lineChartDemo").get(0).getContext("2d");
var lineChart = new Chart(ctxl).Line(data);

var ctxp = $("#pieChartDemo").get(0).getContext("2d");
var pieChart = new Chart(ctxp).Pie(pdata);
</script>
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