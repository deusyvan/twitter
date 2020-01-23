<?php 
namespace Controllers;

use \Core\Controller;
use Models\Usuarios;
use Models\Relacionamentos;
use Models\Posts;

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
        
        if(isset($_POST['msg']) && !empty($_POST['msg'])){
            
            $msg = addslashes($_POST['msg']);
            $p = new Posts();
            $p->inserirPost($msg);
        }
        
        $u = new Usuarios($_SESSION['twlg']);
        $dados['nome'] = $u->getNome();
        //print_r($dados);
        $dados['qt_seguidos'] = $u->countSeguidos();
        $dados['qt_seguidores'] = $u->countSeguidores();
        $dados['sugestao'] = $u->getUsuarios(5);
        
        $this->loadTemplate('home', $dados);
    }
    
    public function seguir($id)
    {
        if(!empty($id)){
            $id = addslashes($id);
            
            $sql = "SELECT * FROM usuarios WHERE id= '$id'";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0 ) {
                
                $r = new Relacionamentos();
                $r->seguir($_SESSION['twlg'], $id);
            }
        }
        header("Location: ".BASE_URL);
    }
    
    public function deseguir($id)
    {
        if(!empty($id)){
            $id = addslashes($id);
            
            $sql = "SELECT * FROM usuarios WHERE id= '$id'";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0 ) {
                
                $r = new Relacionamentos();
                $r->deseguir($_SESSION['twlg'], $id);
            }
        }
        header("Location: ".BASE_URL);
    }
}
