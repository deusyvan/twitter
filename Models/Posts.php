<?php 
namespace Models;

use \Core\Model;

class Posts extends Model {
    
    function inserirPost($msg) {
        $id_usuario = $_SESSION['twlg'];
        
        $sql = "INSERT INTO posts SET id_usuario = '$id_usuario', data_post = NOW(), mensagem = '$msg'";
        $this->db->query($sql);
    }
}