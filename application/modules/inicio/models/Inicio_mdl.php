<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inicio_mdl
 *
 * @author felipe de jesus
 */
class Inicio_mdl extends CI_Model{
    //put your code here
    public function _get_umas() {
        return $this->db
                ->where('c_directorio_uma.estado_id=c_estados.estado_id')
                ->get('c_directorio_uma,c_estados')
                ->result_array();
    }
    public function _get_osc() {
        return $this->db
                ->where('c_directorios_osc.estado_id=c_estados.estado_id')
                ->get('c_directorios_osc,c_estados')
                ->result_array();
    }
}
