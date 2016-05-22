<?php echo modules::run('config/get_head'); ?>
<div class="box-row">
    <div class="box-cell">
        <div class="box-inner padding">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    Diccionarios
                    <button md-ink-ripple="" class="md-btn md-fab m-b blue btn-add-diccionario waves-effect pull-right"><i class="mdi-content-add i-24"></i></button>
                </div>
                <div class="panel-body b-b b-light">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" id="filter" placeholder="Buscar...">
                            </div>        
                        </div>
                        <div class="col-md-12">
                            <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">N°</th>
                                        <th>Palabra</th>
                                        <th>Descripción</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Gestion as $value) {?>
                                    <tr id="<?=$value['diccionario_id']?>">
                                        <td><?=$value['diccionario_id']?></td>
                                        <td><?=$value['diccionario_palabra']?></td>
                                        <td><?=  substr($value['diccionario_descripcion'], 0, 200)?></td> 
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
<script src="<?=  base_url()?>assets/js/tcc_diccionarios.js"></script>