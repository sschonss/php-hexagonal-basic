<?php

// Carrega o autoload gerado pelo Composer
require_once '../vendor/autoload.php';

use Sschonss\PhpHexagonalBasic\Infrastructure\API\UserController;
use Sschonss\PhpHexagonalBasic\Infrastructure\Persistence\UserRepository;

// Simulação de roteamento simples
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Instanciando o controlador e o repositório
$userRepository = new UserRepository();
$usersController = new UserController($userRepository);

// Roteamento
switch ($route) {
    case 'users/get':
        // Rota para recuperar um usuário por ID
        $userId = isset($_GET['id']) ? $_GET['id'] : null;
        echo $usersController->getUser($userId);
        break;

    case 'users/create':
        // Rota para criar um novo usuário
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        echo $usersController->createUser($name, $email);
        break;

    case '/':
        // Rota padrão ou rota inválida
        echo "Bem-vindo à API de usuários!";
        break;

}
