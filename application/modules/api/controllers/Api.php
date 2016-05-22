<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api
 *
 * @author felipe de jesus
 */

class Api extends MX_Controller{
    public function __construct() {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        parent::__construct();
        $this->load->model(array(
           'api_mdl' 
        ));
    }
    public function api_login() {
        $datas = json_decode(file_get_contents("php://input"));
        $user=  $datas->user;
        $pass=  $datas->pass;
        $sql=  $this->api_mdl->_get_user_login($user,  md5($pass));
        if(!empty($sql)){
            $json=array(
                'accion'=>'1',
                'msj'=>$sql[0]['usuario_nombre'],
                'id_token'=>$sql[0]['usuario_id'],
                'rol_token'=>$sql[0]['rol_id']
            );
        }else{
            $json=array('accion'=>'2','msj'=>'Usuario y/o contraseña incorrectos');
        }
        $this->setOutput($json); 
    }
    public function setOutput($json) {
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }     
}
