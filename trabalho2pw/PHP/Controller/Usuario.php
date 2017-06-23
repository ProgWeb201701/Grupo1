<?php
include "db_config.php";

class Usuario
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB_con();
        $this->db = $this->db->ret_obj();
    }

    /*** processo de registro de usuario ***/

    public function registra_usuario($nome_usuario, $senha_usuario, $email_usuario)
    {

        $senha_usuario = md5($senha_usuario);

        //Verifica se o nome de usuário ou o email estão disponíveis no db
        $query = "SELECT * FROM usuario WHERE nome_usuario='$nome_usuario' OR email_usuario='$email_usuario'";

        $result = $this->db->query($query) or die($this->db->error);

        $count_row = $result->num_rows;

        //Se o nome de usuário não estiver no db, então insira na tabela

        if ($count_row == 0) {
            $query = "INSERT INTO usuario SET nome_usuario='$nome_usuario', senha_usuario='$senha_usuario', email_usuario='$email_usuario'";

            $result = $this->db->query($query) or die($this->db->error);

            return true;
        } else {
            return false;
        }


    }


    /*** processo de login ***/
    public function verifica_login($email_usuario, $senha)
    {
        $senha = md5($senha);

        $query = "SELECT id_usuario from usuario WHERE email_usuario='$email_usuario' and senha_usuario='$senha'";

        $result = $this->db->query($query) or die($this->db->error);


        $user_data = $result->fetch_array(MYSQLI_ASSOC);
        $count_row = $result->num_rows;

        if ($count_row == 1) {
            $_SESSION['login'] = true;
            $_SESSION['uid'] = $user_data['uid'];
            return true;
        } else {
            return false;
        }


    }

    public function get_session()
    {
        return $_SESSION['login'];
    }

    public function user_logout()
    {
        $_SESSION['login'] = FALSE;
        unset($_SESSION);
        session_destroy();
    }


}