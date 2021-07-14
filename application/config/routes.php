<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'AdminLogin/login';
$route['logout'] = 'AdminLogin/logout';
$route['gerencial'] = 'Gerencial/index';
$route['cabecalho'] = 'Configuracao/cabecalho';
$route['seo'] = 'Configuracao/seo';
$route['contato'] = 'Configuracao/contato';
$route['social'] = 'Social/index';
$route['smtp'] = 'Smtp/index';
$route['usuarios'] = 'Usuarios/index';
$route['novo-usuario'] = 'Usuarios/novo';
$route['gravar-usuario'] = 'Usuarios/gravar';
$route['editar-usuario/:num'] = 'Usuarios/editar/$1';
$route['remover-usuario'] = 'Usuarios/remover';
$route['checa-email'] = 'Usuarios/checa_email';
$route['servicos'] = 'Servicos/index';
$route['novo-servico'] = 'Servicos/novo';
$route['gravar-servico'] = 'Servicos/gravar';
$route['editar-servico/:num'] = 'Servicos/editar/$1';
$route['remover-servico'] = 'Servicos/remover';
$route['textos'] = 'Texto/index';
$route['portifolio'] = 'Portifolio/index';
$route['novo-portifolio'] = 'Portifolio/novo';
$route['gravar-portifolio'] = 'Portifolio/gravar';
$route['editar-portifolio/:num'] = 'Portifolio/editar/$1';
$route['sobre'] = 'Sobre/index';
$route['novo-sobre'] = 'Sobre/novo';
$route['gravar-sobre'] = 'Sobre/gravar';
$route['editar-sobre/:num'] = 'Sobre/editar/$1';
$route['remover-sobre'] = 'Sobre/remover';
$route['equipe'] = 'Equipe/index';
$route['novo-equipe'] = 'Equipe/novo';
$route['gravar-equipe'] = 'Equipe/gravar';
$route['editar-equipe/:num'] = 'Equipe/editar/$1';
$route['remover-equipe'] = 'Equipe/remover';
$route['cliente'] = 'Cliente/index';
$route['novo-cliente'] = 'Cliente/novo';
$route['gravar-cliente'] = 'Cliente/gravar';
$route['editar-cliente/:num'] = 'Cliente/editar/$1';
$route['remover-cliente'] = 'Cliente/remover';

$route['categorias'] = 'Categorias/index';
$route['nova-categoria'] = 'Categorias/novo';
$route['gravar-Categoria'] = 'Categorias/gravar';
$route['editar-Categoria/:num'] = 'Categorias/editar/$1';
$route['remover-Categoria'] = 'Categorias/remover';
