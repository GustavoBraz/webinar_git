<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Read User</title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if ($_GET) {
            require_once 'bootstrap.php';

            $array_return = array('success' => 1);

            //$user = $entityManager->getRepository('User')->findBy(array('idUser' => $_GET['id_user']));

            $user = $entityManager->find('User',$_GET['id_user']);
            $entityManager->flush(); // Executes all deletions.
            $entityManager->clear(); // Detaches all objects from Doctrine!
            $array_events = array();
            foreach ($user->getIdEvent() as $key => $value) {
                $array_events[$key]['nome'] = $value->getName();
                $array_events[$key]['description'] = $value->getDescription();
            }
            $array_return['events'] = $array_events;
            echo json_encode($array_return);
        }
        ?>
        <br>
        <!-- <a href="formCreate.php">Adicionar um novo usuário</a> -->
    </body>
</html>
