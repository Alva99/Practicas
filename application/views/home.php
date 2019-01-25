<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/funciones.js'); ?>"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <nav class="nav">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Nueva tarea</a>
                <a class="nav-link" href="#">Link</a>
            </nav>
        </div>
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">T&iacute;tulo</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><span class=""></span></td>
                    </tr>
                    <tr>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar tarea</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <form method="post" <?php echo form_open('AddTarea/agregar'); ?>>
            <div class="form-group">
                <label for="Titulo">Titulo</label>
                <input class="form-control form-control-lg" name="titulo" id="titulo" type="text" placeholder="Nombre de la tarea" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Link">Link</label>
                <input class="form-control form-control-lg" name="link" id="link" type="text" placeholder="link" required>
            </div>
            <div class="form-group">
                <label for="desc">Descripcion</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Agregar descripcion" required></textarea>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>

    


    
</body>
</html>
