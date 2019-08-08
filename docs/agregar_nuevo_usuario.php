<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." name="description">
    <!-- Twitter meta-->
    <meta content="summary_large_image" property="twitter:card">
    <meta content="@pratikborsadiya" property="twitter:site">
    <meta content="@pratikborsadiya" property="twitter:creator">
    <!-- Open Graph Meta-->
    <meta content="website" property="og:type">
    <meta content="Vali Admin" property="og:site_name">
    <meta content="Vali - Free Bootstrap 4 admin theme" property="og:title">
    <meta content="http://pratikborsadiya.in/blog/vali-admin" property="og:url">
    <meta content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png" property="og:image">
    <meta content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." property="og:description">
    <title>
        Vali Admin - Free Bootstrap 4 Admin Template
    </title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <!-- Font-icon css-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="principal.php">
            Vali
        </a>
        <!-- Sidebar toggle button-->
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#">
        </a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="app-search">
                <input class="app-search__input" placeholder="Search" type="search">
                <button class="app-search__button">
                    <i class="fa fa-search">
                    </i>
                </button>

            </li>
            <!--Notification Menu-->
            <li class="dropdown">
                <a aria-label="Show notifications" class="app-nav__item" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o fa-lg">
                    </i>
                </a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">
                        You have 4 new notifications.
                    </li>
                    <div class="app-notification__content">
                        <li>
                            <a class="app-notification__item" href="javascript:;">
                                <span class="app-notification__icon">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-primary">
                                        </i>
                                        <i class="fa fa-envelope fa-stack-1x fa-inverse">
                                        </i>
                                    </span>
                                </span>
                                <div>
                                    <p class="app-notification__message">
                                        Lisa sent you a mail
                                    </p>
                                    <p class="app-notification__meta">
                                        2 min ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="app-notification__item" href="javascript:;">
                                <span class="app-notification__icon">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-danger">
                                        </i>
                                        <i class="fa fa-hdd-o fa-stack-1x fa-inverse">
                                        </i>
                                    </span>
                                </span>
                                <div>
                                    <p class="app-notification__message">
                                        Mail server not working
                                    </p>
                                    <p class="app-notification__meta">
                                        5 min ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="app-notification__item" href="javascript:;">
                                <span class="app-notification__icon">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x text-success">
                                        </i>
                                        <i class="fa fa-money fa-stack-1x fa-inverse">
                                        </i>
                                    </span>
                                </span>
                                <div>
                                    <p class="app-notification__message">
                                        Transaction complete
                                    </p>
                                    <p class="app-notification__meta">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <div class="app-notification__content">
                            <li>
                                <a class="app-notification__item" href="javascript:;">
                                    <span class="app-notification__icon">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x text-primary">
                                            </i>
                                            <i class="fa fa-envelope fa-stack-1x fa-inverse">
                                            </i>
                                        </span>
                                    </span>
                                    <div>
                                        <p class="app-notification__message">
                                            Lisa sent you a mail
                                        </p>
                                        <p class="app-notification__meta">
                                            2 min ago
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="app-notification__item" href="javascript:;">
                                    <span class="app-notification__icon">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x text-danger">
                                            </i>
                                            <i class="fa fa-hdd-o fa-stack-1x fa-inverse">
                                            </i>
                                        </span>
                                    </span>
                                    <div>
                                        <p class="app-notification__message">
                                            Mail server not working
                                        </p>
                                        <p class="app-notification__meta">
                                            5 min ago
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="app-notification__item" href="javascript:;">
                                    <span class="app-notification__icon">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x text-success">
                                            </i>
                                            <i class="fa fa-money fa-stack-1x fa-inverse">
                                            </i>
                                        </span>
                                    </span>
                                    <div>
                                        <p class="app-notification__message">
                                            Transaction complete
                                        </p>
                                        <p class="app-notification__meta">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </div>
                    </div>
                    <li class="app-notification__footer">
                        <a href="#">
                            See all notifications.
                        </a>
                    </li>
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
                        <a class="dropdown-item" href="page-user.html">
                            <i class="fa fa-cog fa-lg">
                            </i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="page-user.html">
                            <i class="fa fa-user fa-lg">
                            </i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="page-login.html">
                            <i class="fa fa-sign-out fa-lg">
                            </i>
                            Logout
                        </a>
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
            <img alt="User Image" class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg">
            <div>
                <p class="app-sidebar__user-name">
                    John Doe
                </p>
                <p class="app-sidebar__user-designation">
                    Frontend Developer
                </p>
            </div>

        </div>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item active">
                    <i class="app-menu__icon fa fa-dashboard">
                    </i>
                    <span class="app-menu__label">
                        Inicio
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a class="app-menu__item" data-toggle="treeview" href="#">
                    <i class="app-menu__icon fa fa-laptop">
                    </i>
                    <span class="app-menu__label">
                        Actividades
                    </span>
                    <i class="treeview-indicator fa fa-angle-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <!-- <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>Actividades</a></li>--->
                    <li>
                        <a class="treeview-item" href="alimentacion.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Alimentacion
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item" href="rotacion.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Rotacion
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
                            Produccion
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
            <!---  <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>--->
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
                            Alimentacion
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item" href="consulta_rotacion.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Rotacion
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
                            Produccion
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item" href="consulta_mortalidad.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Mortalida
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a class="app-menu__item" data-toggle="treeview" href="#">
                    <i class="app-menu__icon fa fa-th-list">
                    </i>
                    <span class="app-menu__label">
                        Administrar
                    </span>
                    <i class="treeview-indicator fa fa-angle-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item" href="Consulta_administrador.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Administrador
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item" href="Consulta_operario.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Operario
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item" href="Consulta_operario.php">
                            <i class="icon fa fa-circle-o">
                            </i>
                            Agregar nuevo
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main class="app-content">
        <form action="">
            <div class="app-title">

                <h1><i class="fa fa-dashboard"></i>Registro de persona</h1>
            </div>
            </div>

            <div>
                <label for="exampleInputPassword1">Nombre</label>
                <td><input type="number" name="cantidad" placeholder="ingrese cantidad" class="form-control"></td>
            </div>

            <div>
                <label for="exampleInputPassword1">telefono</label>
                <td><input type="text
               " name="descripcion" placeholder="ingrese descripcion" class="form-control"></td>
            </div>

            <div>
                <label for="exampleInputPassword1">seleccione rol a desempeñar</label>
                <select class="form-control" name="lote" id="" class="form_control">
                    <?php
                    try {
                        include 'php/conect.php';
                        $query = "SELECT id_rol,nombre_rol from rol";
                        $data = $base->prepare($query);
                        $data->execute();


                        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value=" . $row["id_rol"] . "'>" . $row["nombre_rol"] . " </option>";
                        }
                    } catch (exception $e) {
                        die('error ->' . $e->getMessage());
                    }
                    ?>
                </select>
                <div>
                    <label for="exampleInputPassword1">login</label>
                    <td><input type="gmail" name="descripcion" placeholder="ingrese descripcion" class="form-control"></td>
                </div>
                <div>
                    <label for="exampleInputPassword1">Contraseña</label>
                    <td><input type="password" name="descripcion" placeholder="ingrese descripcion" class="form-control"></td>
                </div>
                <br>
                <div>
                    <td>
                        <input type="submit" class="btn btn-primary" value="Registrar ">
                    </td>
                </div>
        </form>
    </main>
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
    <!-- Page specific javascripts-->
    <script src="js/plugins/chart.js" type="text/javascript">
    </script>
    <script type="text/javascript">
        var data = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [{
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
        var pdata = [{
                value: 300,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Complete"
            },
            {
                value: 50,
                color: "#F7464A",
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
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
</body>

</html>