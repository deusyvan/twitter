<?php 
namespace Models;

use \Core\Model;
use PDO;

class  Usuarios extends Model{
    
    private $uid;
    
    public function __construct($id = '')
    {
        parent::__construct();
        
        if(!empty($id)){
            $this->uid = $id;
        }
    }
    
    public function isLogged(){
        if(isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])){
            return true;
        } else {
            return false;
        }
    }
    
    public function usuarioExiste($email){

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
    
    public function inserirUsuario($nome, $email, $senha){
        
        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $this->db->query($sql);
        
        $id = $this->db->lastInsertId();
        
        return $id;
    }
    
    public function fazerLogin($email, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        
        //echo $sql;exit;
        
        $sql = $this->db->query($sql);
        
        var_dump($sql->rowCount());
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            
            $_SESSION['twlg'] = $sql['id'];
            //var_dump($_SESSION['twlg']);exit;
            return true;
            
        }else{
            return false;
        }
    }
    
    public function getNome()
    {
        if (!empty($this->uid)){
            $sql = "SELECT nome FROM usuarios WHERE id = '".($this->uid)."'";
            //$sql = "SELECT * FROM usuarios WHERE id = '{$this->uid}'";
            //echo $sql;exit;
            
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0){
                $sql = $sql->fetch();
                //print_r($sql);exit;
                return $sql['nome'];
            }
        }
    }
    
    public function countSeguidos()
    {
        $sql = "SELECT * FROM relacionamentos WHERE id_seguidor = '".($this->uid)."'";
        $sql = $this->db->query($sql);
        
        return $sql->rowCount();
    }
    
    public function countSeguidores() {
        $sql = "SELECT * FROM relacionamentos WHERE id_seguido = '".($this->uid)."'";
        $sql = $this->db->query($sql);
        
        return $sql->rowCount();
    }
    
    public function getUsuarios($limite)
    {
        $array = array();
        $sql = "SELECT * FROM usuarios WHERE id != '".($this->uid)."' LIMIT $limite";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $array;
    }
    
}