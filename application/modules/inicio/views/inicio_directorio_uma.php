<?php echo modules::run('config/get_head'); ?>
<div class="box-row">
    <div class="box-cell">
        <div class="box-inner padding">
            <div class="panel panel-default">
                <div class="panel-heading back-tcc"> 
                    <strong>Directorio de unidades médicas acreditadas.</strong>
                    <a href="<?=  base_url()?>inicio/agregar_uma?a=add&uma=0">
                        <button md-ink-ripple="" class="md-btn md-fab m-b blue waves-effect pull-right"><i class="mdi-content-add i-24"></i></button>
                    </a>
                </div>
                <div class="panel-body b-b b-light">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group m-b">
                                <span class="input-group-addon back-tcc no-border"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" id="filter" placeholder="Buscar...">
                            </div>        
                        </div>
                        <div class="col-md-12">
                            <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
                                <thead>
                                    <tr>
                                        <th >UMA</th>
                                        <th data-hide='all'>Tipo de acreditación</th>
                                        <th data-hide='all' >Dirección</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Gestion as $value) {?>
                                    <tr id="<?=$value['directorio_id']?>">
                                        <td><?=$value['directorio_nombre']?></td>
                                        <td><?=$value['directorio_nombre']?></td>
                                        <td><?=$value['directorio_direccion']?></td>
                                        <td><?=$value['directorio_telefono']?></td> 
                                        <td><?=$value['directorio_email']?></td>
                                        <td><?=$value['estado_nombre']?></td>
                                        <td class="text-center">
                                            <i class="fa fa-trash-o pointer icono-accion" data-id="<?=$value['diccionario_id']?>"></i>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot class="hide-if-no-paging">
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <ul class="pagination"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo modules::run('config/get_footer'); ?>
<script src="<?=  base_url()?>assets/js/tcc_directorios.js"></script>