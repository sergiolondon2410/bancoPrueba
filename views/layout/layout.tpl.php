<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bancognox</title>

	<!--<link href="<?= DIR_RAIZ ?>/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <!--<link href="<?= DIR_RAIZ ?>/css/1-col-portfolio.css" rel="stylesheet">-->

    <!-- Bootstrap Core CSS -->
    <link href="<?= DIR_RAIZ ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= DIR_RAIZ ?>/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= DIR_RAIZ ?>/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= DIR_RAIZ ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
    <div id="wrapper">
	<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= DIR_RAIZ ?>">Bancognox</a>
            </div>
            
            <!-- Top Menu Items -->
            <?php if(isset($_SESSION["username"])): ?>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $_SESSION["nombre"] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= DIR_RAIZ ?>/home/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php endif ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?= DIR_RAIZ ?>/home/"><i class="fa fa-fw fa-dashboard"></i> Menú</a>
                    </li>
                    <?php if(isset($_SESSION["username"])): ?>
                    <li>
                        <a href="<?= DIR_RAIZ ?>/cuenta/listar/<?= $_SESSION["userid"] ?>"><i class="fa fa-fw fa-desktop"></i> Estado de cuenta</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Transacciones <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?= DIR_RAIZ ?>/transaccion/propias/<?= $_SESSION["userid"] ?>">Entre Cuentas Propias</a>
                            </li>
                            <li>
                                <a href="<?= DIR_RAIZ ?>/transaccion/terceros/<?= $_SESSION["userid"] ?>">A Terceros</a>
                            </li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li>
                        <a href="<?= DIR_RAIZ ?>/home/login"><i class="fa fa-fw fa-desktop"></i> Operaciones Bancarias</a>
                    </li>
                    <?php endif ?>    
                </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bancognox <small>Tu Banco</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?= $tpl_content ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	<!-- jQuery -->
    <script src="<?= DIR_RAIZ ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= DIR_RAIZ ?>/js/bootstrap.min.js"></script>

    

    <!-- Morris Charts JavaScript -->
    <script src="<?= DIR_RAIZ ?>/js/plugins/morris/raphael.min.js"></script>
    <script src="<?= DIR_RAIZ ?>/js/plugins/morris/morris.min.js"></script>
    <script src="<?= DIR_RAIZ ?>/js/plugins/morris/morris-data.js"></script>
</body>
</html>