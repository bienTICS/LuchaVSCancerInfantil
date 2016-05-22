<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api_mdl
 *
 * @author felipe de jesus
 */
class Api_mdl extends CI_Model{
    public function _insert($table,$data) {
        return $this->db->insert($table,$data);
    }
    public function _get_data($table) {
        return $this->db->get($table)->result_array();
    }
    public function _get_data_condition($table,$condicion) {
        return $this->db->get_where($table,$condicion)->result_array();
    }
    public function _update_data($table,$data,$condicion) {
        return $this->db->update($table,$data,$condicion);
    }
    public function _delete_data($table,$condicion) {
        return $this->db->delete($table,$condicion);
    } 
    public function _get_last_id($table,$id) {
        $sql= $this->db->select_max($id,'last_id')->get($table)->result_array();
        return $sql[0]['last_id'];
    }
    public function _get_user_login($user,$pass) {
        return $this->db
                ->where('c_usuarios.rol_id=c_roles.rol_id')
                ->where('c_usuarios.usuario_user',$user)
                ->where('c_usuarios.usuario_pass',$pass)
                ->get('c_usuarios, c_roles')
                ->result_array();
    }
}
