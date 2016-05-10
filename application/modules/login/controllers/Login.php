<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author felipe de jesus
 */
require_once APPPATH.'modules/config/controllers/Config.php';
class Login extends Config{
    public function __construct() {
        parent::__construct();
        $this->load->model('login_mdl');
    }
    public function index() {
        $this->load->view('index');
    }
    public function login_user() {
        $sql=  $this->login_mdl->login_user($this->input->post('username'),  $this->input->post('password'));
        if(!empty($sql)){
            $_SESSION['idUser']=$sql[0]['usuario_id'];
            $_SESSION['idRol']=$sql[0]['rol_id'];
            $this->setOutput(array('accion'=>'1'));
        }else{
            $this->setOutput(array('accion'=>'2'));
        }
    }  
}
