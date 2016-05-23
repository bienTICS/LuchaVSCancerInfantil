<?php echo modules::run('config/get_head'); ?>
<div class="box-row">
    <div class="box-cell">
        <div class="col-md-6 col-md-offset-3">
        <div class="box-inner padding ">
            <div class="panel panel-default">
                <div class="panel-heading back-tcc"> 
                    <strong>Agregar OSC</strong>
                </div>
                <div class="panel-body b-b b-light">
                    <form class="form-osc">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input" name="osc_organizacion" value="<?=$osc[0]['osc_organizacion']?>" required="">
                                <label>Organizacion de la sociedad civil</label>
                            </div>
                            <div class="md-form-group">
                                <input class="md-input" name="osc_direccion" value="<?=$osc[0]['osc_direccion']?>" required="">
                                <label>Dirección</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input tagsinput" name="osc_telefono" value="<?=$osc[0]['osc_telefono']?>" required="">
                                <label>Telefonos</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input" name="osc_sitioweb" value="<?=$osc[0]['osc_sitioweb']?>">
                                <label>Sitio web</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <textarea class="md-input" rows="3" name="osc_servicios"><?=$osc[0]['osc_servicios']?></textarea>
                                <label>Servicios</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group" style="margin-top:-10px">
                                <select class="md-input estado_id" name="estado_id" data-id="<?=$osc[0]['estado_id']?>"></select>
                                <label>Seleccionar estado</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group" style="margin-top:-10px">
                                <input type="hidden" name="jtf_accion" value="<?=$_GET['a']?>">
                                <input type="hidden" name="osc_id" value="<?=$_GET['osc']?>">
                                <button type="submit" class="md-btn  btn-fw back-tcc waves-effect pull-right">Guardar</button>
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