<?php 
namespace Controllers;

use \Core\Controller;
use Models\Usuarios;

class HomeController extends Controller{
    
    public function index(){
        
        $u = new Usuarios();
        
        if(!$u->isLogged()){
            header("Location: ".BASE_URL."logar");
        }
        
        $array = array();
        
        
        $this->loadTemplate('home', $array);
    }
}
