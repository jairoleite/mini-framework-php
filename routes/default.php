<?php
$this->get('', function($arg){
	$tpl = $this->core->loadModule('template');
	$data = array();
	$data['title'] = 'Faster Mini Framework';
	$data['subTitle'] = 'Uma forma simples de construir suas aplicações em php...';
	$tpl->render('teste', $data);
});

// $this->get('404', function($arg){
// 	$tpl = $this->core->loadModule('template');
// 	$tpl->render('404');
// });

$this->loadRouteFile('teste');