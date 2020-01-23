<?php
global $routes;
$routes = array();

$routes['/cadastro/{nome}/{sobrenome}'] = '/usuario/cadastrar/:nome/:sobrenome';
$routes['/usuario/{id}'] = '/usuario/abrir/:id';
$routes['/anuncios/{id}'] = '/anuncio/abrir/:id';
//$routes['/home'] = '/home/index';
//Não muito usual pois força fazer router pra todos os tipos e a solução do home no comentário acima
//$routes['/{titulo}'] = '/anuncio/abrirTitulo/:titulo';