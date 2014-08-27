<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Criar Evento</title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if ($_GET) {
            require_once 'bootstrap.php';

            $array_return = array('success' => 1);

            $user = $entityManager->find('User',$_GET['id_administrator']);
            $event = $entityManager->find('Event',$_GET['id_event']);
            if( !is_null($user) && !is_null($event) ) {
                $event->getIdUser()->add($user);
                try {
                    $entityManager->getConnection()->beginTransaction(); // Suspende o auto-commit
                    $entityManager->persist($event);
                    $entityManager->flush();
                    $entityManager->getConnection()->commit();
                    $array_return['message'] = "Usuário adicionado com sucesso";
                } catch (Exception $e) {
                    $pdo_error = array();
                    $pdo_error = $e->getPrevious()->errorInfo;
                    $array_return['success'] = 0;
                    $array_return['message'] = "Falha ao adicionar usuário.";
                    $array_return['mysql_error_message'] = $pdo_error[2];
                }
            } else {
                $array_return['success'] = 0;
                $array_return['id_event'] = null;
                $array_return['message'] = "Especifique um administrador para o evento.";
            }
            echo json_encode($array_return);
        }
        ?>
        <!-- <a href="formCreate.php">Adicionar um novo usuário</a> -->
    </body>
</html>
