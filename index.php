<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alo mundo</title>
    </head>
    <body>
        <a href="formCreate.php">Adicionar um novo usuário</a>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if ($_GET) {
            /*
            * Fazendo o require do arquivo Bootstrap.php, podemos utilizar tudo que lá foi definido.
            * Estou falando principalmente do EntityManager, criado sobre a variável $entityManager
            */
           require_once 'bootstrap.php';
           
           $user = $entityManager->find('User',2);

           $event = $entityManager->find('Event',5);

           $event->getIdUser()->add($user);

           /**
            * 
            * Aqui o EM entra em ação. 
            * A função persist aguarda por um objeto  para colocá-lo na fila
            * de instruções a ser executada sobre o banco de dados
            */
           $entityManager->persist($user);

           /**
            * 
            * Novamente o EM age e invoca a função flush.
            * Esta é a responsável por pegar todas as intruções previamente preparadas
            * pelo persist e executá-las no banco de dados. 
            * Só a apartir daqui o banco é alterado de alguma forma.
            */
           $entityManager->flush();
           
           echo 'passou';
        }
        ?>
    </body>
</html>
