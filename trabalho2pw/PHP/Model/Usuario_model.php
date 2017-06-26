<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Daniele Martins
 * Date: 13/06/2017
 * Time: 19:00
 */

class User_model{

    //Adiciona um novo usuário na tabela usuario
    public function addUser($dados = NULL)
    {
        if ($dados != NULL):
            $this->db->insert('usuario', $dados);
        endif;
    }

}