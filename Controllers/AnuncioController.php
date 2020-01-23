<?php 
namespace Controllers;

use \Core\Controller;

class AnuncioController extends Controller{
    
    public function index(){
        
    }
    
    public function abrir($id){
        echo "Id do anuncio: ".$id;
    }
    
    public function abrirTitulo($titulo) {
        echo "Titulo do anuncio: ".$titulo;
    }
}
