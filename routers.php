<?php
global $routes;
$routes = array();

$routes['/'] = '/home';
$routes['/logar'] = '/login';
$routes['/cadastrar'] = '/login/cadastro/';
$routes['/deslogar'] = '/login/logout/';
$routes['/usuario/{id}'] = '/usuario/abrir/:id';
$routes['/anuncios/{id}'] = '/anuncio/abrir/:id';
//Não muito usual pois força fazer router pra todos os tipos e a solução do home no comentário acima
//$routes['/{titulo}'] = '/anuncio/abrirTitulo/:titulo';