<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo;?></h4>

            <?php  if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors(); ?>
                </div>
            <?php } ?> 


            <form method="POST" action="<?php echo base_url(); ?>/clientes/insertar" autocomplete="off">
          
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Dirección</label>
                            <input class="form-control" id="direccion" name="direccion" type="text" value="<?php echo set_value('direccion') ?>" />
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Teléfono</label>
                            <input class="form-control" id="telefono" name="telefono" type="text" />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Correo</label>
                            <input class="form-control" id="correo" name="correo" type="text" />
                        </div>
                    </div>
                </div>

                <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary mt-3">Regresar</a>
                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            
            </form>
                 
        </div>
    </main>