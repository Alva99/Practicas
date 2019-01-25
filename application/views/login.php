<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <form method="post" <?php echo form_open('Login/valida'); ?>> 
            <div class="card-body">
					<div class="form-group text-center">
						<h3>Bienvenido al sistema de tareas</h3>
					</div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" id="username" type="text" placeholder="Nombre de usuario" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Recordar usuario</span>
                        </label>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Acceder">
				</form>
				<br>
                <p><?php 
                 if($respuesta == null ){
                    echo '<p>'. $respuesta.'</p>';
                }else{
                    echo '<p class="respuesta">'. $respuesta.'</p>';
                 }
                ?>
            </div>
            <div class="card-footer bg-white p-0  ">
              </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</body>

</html>
