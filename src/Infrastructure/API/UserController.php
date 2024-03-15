<?php

namespace Sschonss\PhpHexagonalBasic\Infrastructure\API;

use Sschonss\PhpHexagonalBasic\Domain\User;
use Sschonss\PhpHexagonalBasic\Infrastructure\Persistence\UserRepository;

class UserController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUser($id)
    {
        $user = $this->userRepository->findById($id);
        // Aqui você retornaria o usuário como uma resposta JSON para a API
        return json_encode([
            'id' => $user->getId(),
            'name' => $user->getName(),
            'email' => $user->getEmail()
        ]);
    }

    public function createUser($name, $email)
    {
        $user = new User(null, $name, $email);
        $this->userRepository->save($user);
        // Aqui você retornaria uma resposta de sucesso para a API
        return "Usuário criado com sucesso!";
    }
}
