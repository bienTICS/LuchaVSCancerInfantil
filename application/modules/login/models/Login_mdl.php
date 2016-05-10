<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_mdl
 *
 * @author felipe de jesus
 */
class Login_mdl extends CI_Model{
    public function login_user($user,$pass) {
        return $this->db
                ->where('c_usuarios.rol_id=c_roles.rol_id')
                ->where('c_usuarios.usuario_user',$user)
                ->where('c_usuarios.usuario_pass',  md5($pass)) 
                ->get('c_usuarios, c_roles')
                ->result_array();
    }
}
