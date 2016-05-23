<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inicio
 *
 * @author felipe de jesus
 */
require_once APPPATH.'modules/config/controllers/Config.php';
class Inicio extends Config{
    public function __construct() {
        parent::__construct();
        $this->load->model('inicio_mdl');
    }

    //put your code here
    public function index() {
        $this->load->view('inicio_index');
    }
    public function diccionarios() {
        $sql['Gestion']=  $this->config_mdl->_get_data('c_diccionarios');
        $this->load->view('inicio_diccionarios',$sql);
    }
    public function insert_diccionario() {
        $data=array(
            'diccionario_palabra'=>  $this->input->post('diccionario_palabra'),
            'diccionario_descripcion'=>  $this->input->post('diccionario_descripcion')
        );
        if($this->config_mdl->_insert('c_diccionarios',$data)){
            $this->setOutput(array('accion'=>'1'));
        }else{
            $this->setOutput(array('accion'=>'2'));
        }
    }
    public function eliminar_diccionario() {
        if($this->config_mdl->_delete_data('c_diccionarios',array('diccionario_id'=>  $this->input->post('id')))){
            $this->setOutput(array('accion'=>'1'));
        }else{
            $this->setOutput(array('accion'=>'2'));
        }
    }
    public function directorio_uma() {
        $sql['Gestion']=  $this->inicio_mdl->_get_umas();
        $this->load->view('inicio_directorio_uma',$sql);
    }
    public function agregar_uma() {
        $sql['uma']=  $this->config_mdl->_get_data_condition('c_directorio_uma',array('directorio_id'=>  $this->input->get_post('uma')));
        $this->load->view('inicio_directorio_uma_agregar',$sql);
    }
    public function listar_estados() {
        $sql=  $this->config_mdl->_get_data('c_estados');
        foreach ($sql as $value) {
            $option.='<option value="'.$value['estado_id'].'">'.$value['estado_nombre'].'</option>';
        }
        $this->setOutput(array('option'=>$option));
    }
    public function insert_uma() {
        $data=array(
            'directorio_nombre'=>  $this->input->post('directorio_nombre'),
            'directorio_direccion'=>  $this->input->post('directorio_direccion'),
            'directorio_telefono'=>  $this->input->post('directorio_telefono'),
            'directorio_email'=>  $this->input->post('directorio_email'),
            'directorio_acreditaciones'=>  $this->input->post('directorio_acreditaciones'),
            'estado_id'=>  $this->input->post('estado_id')
        );
        if($this->input->post('jtf_accion')=='add'){
            if($this->config_mdl->_insert('c_directorio_uma',$data)){
                $this->setOutput(array('accion'=>'1'));
            }else{
                $this->setOutput(array('accion'=>'2'));
            }
        }else{
            if($this->config_mdl->_update_data('c_directorio_uma',$data,array('directorio_id'=>  $this->input->post('directorio_id')))){
                $this->setOutput(array('accion'=>'1'));
            }else{
                $this->setOutput(array('accion'=>'2'));
            }
        }
    }
    public function directorio_osc() {
        $sql['Gestion']=  $this->inicio_mdl->_get_osc();
        $this->load->view('inicio_directorio_osc',$sql);
    }
    public function agregar_osc() {
        $sql['osc']=  $this->config_mdl->_get_data_condition('c_directorios_osc',array('osc_id'=>  $this->input->get_post('osc')));
        $this->load->view('inicio_directorio_osc_agregar',$sql);
    }
    public function insert_osc() {
        $data=array(
            'osc_organizacion'=>  $this->input->post('osc_organizacion'),
            'osc_direccion'=>  $this->input->post('osc_direccion'),
            'osc_telefono'=>  $this->input->post('osc_telefono'),
            'osc_sitioweb'=>  $this->input->post('osc_sitioweb'),
            'osc_servicios'=>  $this->input->post('osc_servicios'),
            'estado_id'=>  $this->input->post('estado_id')
        );
        if($this->input->post('jtf_accion')=='add'){
            if($this->config_mdl->_insert('c_directorios_osc',$data)){
                $this->setOutput(array('accion'=>'1'));
            }else{
                $this->setOutput(array('accion'=>'2'));
            }
        }else{
            if($this->config_mdl->_update_data('c_directorios_osc',$data,array('osc_id'=>  $this->input->post('osc_id')))){
                $this->setOutput(array('accion'=>'1'));
            }else{
                $this->setOutput(array('accion'=>'2'));
            }
        }
    }    
}
