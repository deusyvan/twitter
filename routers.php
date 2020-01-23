<?php
global $routes;
$routes = array();

$routes['/'] = '/home';
$routes['/logar'] = '/login';
$routes['/cadastrar'] = '/login/cadastro/';
$routes['/deslogar'] = '/login/logout/';
$routes['/seguir/{id}'] = '/home/seguir/:id';
$routes['/deseguir/{id}'] = '/home/deseguir/:id';
//Não muito usual pois força fazer router pra todos os tipos e a solução do home no comentário acima
//$routes['/{titulo}'] = '/anuncio/abrirTitulo/:titulo';