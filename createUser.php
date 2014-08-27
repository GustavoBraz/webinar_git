<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create User</title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if ($_GET) {
            require_once 'bootstrap.php';

            $array_return = array('success' => 1);

            $user = new User;
            $user->setPass($_GET['pass'])
                 ->setEmail($_GET['email'])
                 ->setFirstName($_GET['first_name'])
                 ->setLastName($_GET['last_name'])
                 ->setProfileMessage($_GET['profile_message'])
                 ->setPictureMessage($_GET['picture_message']);

            try {
                $entityManager->getConnection()->beginTransaction(); // suspend auto-commit
                $entityManager->persist($user);
                $entityManager->flush();
                $entityManager->getConnection()->commit();
                $array_return['id_user'] = $user->getIdUser();
                $array_return['message'] = "Usuário cadastrado com sucesso";
            } catch (Exception $e) {
                $pdo_error = array();
                $pdo_error = $e->getPrevious()->errorInfo;
                if ( in_array($pdo_error[1], array('1022','1062','1052','1169')) ) {
                    $array_return['success'] = 0;
                    $array_return['message'] = "Usuário já existe. Email '{$_GET['email']}' já está cadastrado no sistema. Tente recuperar sua senha.";
                    $array_return['mysql_error_message'] = $pdo_error[2];
                    $array_return['id_user'] = null;
                } else {
                    $array_return['success'] = 0;
                    $array_return['message'] = "Falha ao cadastrar usuário. Tente novamente.";
                    $array_return['mysql_error_message'] = $pdo_error[2];
                    $array_return['id_user'] = null;
                }
                $entityManager->getConnection()->rollback();
                $entityManager->close();
            }
            echo json_encode($array_return);
        }
        ?>
        <br>
        <!-- <a href="formCreate.php">Adicionar um novo usuário</a> -->
    </body>
</html>
