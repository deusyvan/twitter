<?php 
namespace Models;

use \Core\Model;

class Relacionamentos extends Model{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function seguir($seguidor, $seguido)
    {
        $sql = "INSERT INTO relacionamentos SET id_seguidor = '$seguidor', id_seguido = '$seguido'";
        $this->db->query($sql);
    }
    
    public function deseguir($seguidor, $seguido)
    {
        $sql = "DELETE FROM relacionamentos WHERE id_seguidor = '$seguidor' AND id_seguido = '$seguido'";
        $this->db->query($sql);
    }
}