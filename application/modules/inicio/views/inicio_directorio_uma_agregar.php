<?php echo modules::run('config/get_head'); ?>
<div class="box-row">
    <div class="box-cell">
        <div class="col-md-6 col-md-offset-3">
        <div class="box-inner padding ">
            <div class="panel panel-default">
                <div class="panel-heading back-tcc"> 
                    <strong>Agregar UMA</strong>
                </div>
                <div class="panel-body b-b b-light">
                    <form class="form-uma">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_nombre" required="" value="<?=$uma[0]['directorio_nombre']?>">
                                <label>Unidad Médica Acreaditada</label>
                            </div>
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_direccion" required="" value="<?=$uma[0]['directorio_direccion']?>">
                                <label>Dirección</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_telefono" required="" value="<?=$uma[0]['directorio_telefono']?>">
                                <label>Telefono</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group">
                                <input class="md-input" name="directorio_email" required="" value="<?=$uma[0]['directorio_email']?>">
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form-group">
                                <input class="md-input tagsinput" style="width: 100%!important" value="<?=$uma[0]['directorio_acreditaciones']?>" required="" name="directorio_acreditaciones">
                                <label>Tipo de acreditación</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group" style="margin-top:-10px">
                                <select class="md-input estado_id" name="estado_id" data-id="<?=$uma[0]['estado_id']?>">
                                   
                                </select>
                                <label>Seleccionar estado</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form-group" style="margin-top:-10px">
                                <input type="hidden" name="jtf_accion" value="<?=$_GET['a']?>">
                                <input type="hidden" name="directorio_id" value="<?=$_GET['uma']?>">
                                <button type="submit" class="md-btn md-raised m-b btn-fw back-tcc waves-effect pull-right">Guardar</button>
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