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
    public function direcctorio_ua() {
        
    }
}
