<?php 
namespace Models;

use \Core\Model;
use PDO;

class  Usuarios extends Model{
    
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
    
}