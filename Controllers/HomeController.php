<?php 
namespace Controllers;

use \Core\Controller;
use Models\Usuarios;

class HomeController extends Controller{
    
    public function __construct()
    {
        parent::__construct();
        
        $u = new Usuarios();
        
        if(!$u->isLogged()){
            header("Location: ".BASE_URL."logar");
        }
    }
    
    public function index()
    {
        $array = array(
            'nome' => ''
        );
        $u = new Usuarios($_SESSION['twlg']);
        $dados['nome'] = $u->getNome();
        //print_r($dados);
        $dados['qt_seguidos'] = $u->countSeguidos();
        $dados['qt_seguidores'] = $u->countSeguidores();
        $dados['sugestao'] = $u->getUsuarios(5);
        
        $this->loadTemplate('home', $dados);
    }
}
