<?php
$this->get('', function($arg){
	echo 'home';
});

$this->get('404', function($arg){
	$tpl = $this->core->loadModule('template');
	$tpl->render('404');
});

$this->loadRouteFile('noticias');