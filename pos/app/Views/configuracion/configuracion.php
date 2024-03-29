            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                        <?php  if(isset($validation)){ ?>
                            <div class="alert alert-danger">
                                <?php echo $validation->listErrors(); ?>
                            </div>
                        <?php } ?> 

                        <form method="POST" action="<?php echo base_url(); ?>/configuracion/actualizar" autocomplete="off">
                        <?php csrf_field(); ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Nombre de la tienda</label>
                                        <input class="form-control" id="tienda_nombre" name="tienda_nombre" type="text" value="<?php echo $nombre['valor']; ?>" autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <label>RFC</label>
                                        <input class="form-control" id="tienda_rfc" name="tienda_rfc" type="text" value="<?php echo $rfc['valor']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Teléfono de la tienda</label>
                                        <input class="form-control" id="tienda_telefono" name="tienda_telefono" type="text" value="<?php echo $telefono['valor']; ?>" required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <label>Correo de la tienda</label>
                                        <input class="form-control" id="tienda_email" name="tienda_email" type="text" value="<?php echo $email['valor']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Dirección de la tienda</label>
                                        <textarea class="form-control" name="tienda_direccion" id="tienda_direccion" required><?php echo $direccion['valor']; ?></textarea>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <label>Leyenda del ticket</label>
                                        <textarea class="form-control" name="ticket_leyenda" id="ticket_leyenda" required ><?php echo $leyenda['valor']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary mt-3">Regresar</a>
                            <button type="submit" class="btn btn-success mt-3">Guardar</button>
                        </form>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar este registro?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                                <a class="btn btn-danger btn-ok">Si</a>
                            </div>
                        </div>
                    </div>
                </div>