# Faster mini framework para criar aplicações modulares em php de forma rápida...

## - Estrutura do Framework

- assets
  - css
  - images
  - js
- routes
- modules
  - Core
  - Database
  - Router
  - Template
- templates
- .htaccess
- config.php
- index.php
- README

---

## - Instruções de uso

**_`1 - Crie um arquivo php na pasta \modules\ correspondente a sua regra de negócio`_**

```
<?php
class Teste {

private $db;
 //obrigatóriamente adicione o construtor
private function __construct() {
	$core = Core::getInstance();
	$this->db = $core->loadModule('database');
}
 //crie uma instância única para seu módulo
public static function getInstance() {
	static $inst = null;
	if($inst === null) {
		$inst = new News();
	}
	return $inst;
}

 **/
   observação: adicionando esses dois métodos, apartir de agora crie sua lógica acessando o banco de dados
 /**

}
```

**_`2 - Crie um arquivo php na pasta \controllers\ será seu gerênciador da view, seguinte o modelo MVC.`_**

```
<?php

//use o método get de acordo com sua necessidade
$this->get('teste', function($arg){
  //carregue o template para usar
	$tpl = $this->core->loadModule('template');

  //array de informção que será passada para a view
	$data = array();
	$data['title'] = 'Faster Mini Framework';

	$tpl->render('teste', $data);
});

//use o método post de acordo com sua necessidade
$this->post('teste', function($arg){
	$tpl = $this->core->loadModule('template');
	$tpl->render('teste');
});

```

**_`3 - Crie um arquivo php na pasta \templates\ será sua view html`_**

```
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>teste</title>
</head>
<body>
     //variável passad no controller
    <h1><?php echo $data['title']?></h1>
</body>
</html>
```

---

## - Karnel do Framework

### . Pasta modules

**`É adicionado toda a lógica do framework dívidida em módulos e também será colocada sua regra de negócio, exemplo: site de notícias o módulo poderia ser "noticia".`**

#### .. Core

**`Parte fundamental de tratamento do framework, instância todo o projeto para ser usado.`**

#### .. Database

**`Cria conexão com o banco de dados. Apartir do arquivo de configuração (config.php)`**

### ..Router

**`Manipula todos as requisições, até o momento (GET e POST), convertendo para controllers essas requisições.`**

### ..Template

**`Cria conexão entre o html e o seu modelo de dados, representado através de variáveis`**
