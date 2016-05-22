<?php echo modules::run('config/get_head'); ?>
<div class="box-row">
    <div class="box-cell">
        <div class="col-md-6 col-md-offset-3">
        <div class="box-inner padding ">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    Agregar OSC
                </div>
                <div class="panel-body b-b b-light">
                    <form class="form-osc">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input" name="osc_organizacion" required="">
                                <label>Organizacion de la sociedad civil</label>
                            </div>
                            <div class="md-form-group">
                                <input class="md-input" name="osc_direccion" required="">
                                <label>Dirección</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input tagsinput" name="osc_telefono" required="">
                                <label>Telefonos</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input" name="osc_sitioweb" >
                                <label>Sitio web</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <textarea class="md-input" rows="4" name="osc_servicios"></textarea>
                                <label>Servicios</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group" style="margin-top:-10px">
                                <select class="md-input estado_id" name="estado_id">
                                   
                                </select>
                                <label>Seleccionar estado</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group" style="margin-top:-10px">
                                <input type="hidden" name="jtf_accion" value="<?=$_GET['a']?>">
                                <input type="hidden" name="osc_id" value="<?=$_GET['osc']?>">
                                <button type="submit" class="md-btn md-raised m-b btn-fw blue waves-effect pull-right">Guardar</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php echo modules::run('config/get_footer'); ?>
<script src="<?=  base_url()?>assets/js/tcc_directorios.js"></script>