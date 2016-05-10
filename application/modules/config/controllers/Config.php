<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author felipe de jesus
 */
class Config extends MX_Controller{
    public function __construct() {
        parent::__construct();
        error_reporting(0);
        if(!isset($_SESSION['idUser']) && $this->uri->segment(1, 0)!='login'){
            redirect('login');
        }
    }

    public function get_head() {
        $this->load->view('head');
    }
    public function get_footer() {
        $this->load->view('footer');
    }
    public function CerrarSesion() {
        session_destroy();
        session_unset();
        redirect('login');
    }
    public function setOutput($json) {
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }      
}
