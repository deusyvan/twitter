<?php 
namespace Controllers;

use \Core\Controller;

class UsuarioController extends Controller{
    
    public function index(){
        
    }
    
    public function cadastrar($nome,$sobrenome) {
        echo "NOME: ".$nome."<br/>";
        echo "Sobrenome: ".$sobrenome;
    }
    
    public function abrir($id){
        echo "Id do usuario: ".$id;
    }
}
