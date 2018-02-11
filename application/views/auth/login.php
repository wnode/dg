<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Software Despachante</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
				<?php if(isset($message)): ?>
				<div class="alert alert-danger" role="alert" style="margin-bottom: -70px; margin-top: 50px;">
					<?php echo $message;?></div>
				<?php endif ?>
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <h3 class="panel-title">Bem-Vindo ao Despachante Palhoça!</h3>
                    </div>
                    <div class="panel-body">
                        
						<form action="<?php echo site_url('auth/login'); ?>" method="post" accept-charset="utf-8" role="form">
                            <fieldset>
                                <div class="form-group">
									<input class="form-control" placeholder="E-mail" type="email" name="identity" value="" id="identity"  autofocus/>
                                </div>
                                <div class="form-group">
                                 	<input class="form-control" placeholder="Password"  type="password" name="password" value="" id="password"  />
                                </div>
                                <div class="checkbox">
                                    <label>
                                       	<input type="checkbox" name="remember" value="1"  id="remember" />
										Lembrar
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Acessar"  />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
