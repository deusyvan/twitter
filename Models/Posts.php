<?php 
namespace Models;

use \Core\Model;

class Posts extends Model {
    
    public function inserirPost($msg)
    {
        $id_usuario = $_SESSION['twlg'];
        
        $sql = "INSERT INTO posts SET id_usuario = '$id_usuario', data_post = NOW(), mensagem = '$msg'";
        $this->db->query($sql);
    }
    
    public function getFeed($lista, $limit)
    {
        $array = array();
        
        if(count($lista) > 0){
            $sql = "SELECT *, 
                        (select nome from usuarios where usuarios.id = posts.id_usuario) as nome
                    FROM posts WHERE id_usuario IN (".implode(',', $lista).") 
                    ORDER BY data_post DESC LIMIT ".$limit;
            //echo $sql;exit;//Visualiza o sql
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }
        }
        return $array;
    }
}