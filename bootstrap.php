<?php
// bootstrap.php
// vamos configurar a chamada ao Entity Manager, o mais important do Doctrine

// o Autoload é responsável por carregar as classes sem necessidade de incluí-las previamente
require_once "vendor/autoload.php";

// o Doctrine utiliza namespaces em sua estrutura, por isso estes uses
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// onde irão ficar as entidades do projeto? Defina o caminho aqui
$entidades = array("src/");
$isDevMode = true;

// configurações de uma conexão. Coloque aqui seus dados
$dbParams = array(
	'driver' => 'pdo_mysql',
	'user' => 'root',
        'password' => '',
        'dbname' => 'getuprv0'
);

// setando as configurações definidas anteriormente
$config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);

// criando o EntityManager com base nas configurações de dev e banco de dados
$entityManager = EntityManager::create($dbParams,$config);

// Desligando os logs
$entityManager->getConnection()->getConfiguration()->setSQLLogger(null);