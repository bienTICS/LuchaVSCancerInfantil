<?php echo modules::run('config/get_head'); ?>
<div class="box-row">
    <div class="box-cell">
        <div class="col-md-6 col-md-offset-3">
        <div class="box-inner padding ">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    Agregar UMA
                </div>
                <div class="panel-body b-b b-light">
                    <form class="form-uma">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_nombre" required="">
                                <label>Unidad Médica Acreaditada</label>
                            </div>
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_direccion" required="">
                                <label>Dirección</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_telefono" required="">
                                <label>Telefono</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_email" required="">
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input tagsinput" style="width: 100%!important" required="" name="directorio_acreditaciones">
                                <label>Tipo de acreditación</label>
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
                                <input type="hidden" name="jtf_id" value="<?=$_GET['uma']?>">
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