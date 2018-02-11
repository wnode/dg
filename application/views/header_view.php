<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DGESTÃO</title>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">DGESTÃO</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
       
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
					
					<?php $user = $this->ion_auth->user()->row();?>
					
                    <ul class="dropdown-menu">
					<?php if ($this->ion_auth->is_admin()): ?>
							
								<li><a href="<?php echo site_url('auth'); ?>"><i class="fa fa-gear fa-fw"></i> Administração</a>
								</li>
							
					<?php endif ?>
						
                        <li><a href="<?php echo site_url('auth/edit_user'); ?>/<?php echo $user->id;?>"><i class="fa fa-user fa-fw"></i> Sua Conta</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('auth/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a class="qualquer" href="<?php echo site_url(); ?>/dashboard"><i class="fa fa-home fa-fw"></i> Início</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-automobile fa-fw"></i> Dados Veículo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('carroceria'); ?>">Carrocerias</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('categoria'); ?>">Categorias</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('combustivel'); ?>">Combustível</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('cor'); ?>">Cor</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('especie'); ?>">Espécie</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('marcas_modelo'); ?>">Marca/Modelo</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('restricao'); ?>">Restrição</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('tipo_veiculo'); ?>">Tipo de Veículo</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Despachante<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('despachante'); ?>">Despachante</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('cliente'); ?>">Clientes</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('veiculo'); ?>">Veículos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 class="page-header">
                            <?php echo $pagina; ?>
                            <small><?php echo $sub_pagina; ?></small>
                        </h1>

                        <?php echo create_breadcrumb(); ?>
