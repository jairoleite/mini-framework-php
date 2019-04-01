<?php
$this->get('noticias', function($arg) {
	$tpl = $this->core->loadModule('template');
	$tpl->render('noticias');
});

$this->post('noticias', function($arg){
	echo "ENVIOU POR POST...";
});

