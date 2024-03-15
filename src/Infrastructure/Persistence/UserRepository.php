<?php

namespace Sschonss\PhpHexagonalBasic\Infrastructure\Persistence;
use Sschonss\PhpHexagonalBasic\Domain\User;

class UserRepository
{
    public function findById($id)
    {
        // Implementação para buscar usuário por ID no banco de dados
        // (Aqui você usaria o seu ORM ou biblioteca de acesso a banco de dados)
        return new User($id, 'John Doe', 'john@example.com');
    }

    public function save(User $user)
    {
        // Implementação para salvar usuário no banco de dados
        // (Aqui você usaria o seu ORM ou biblioteca de acesso a banco de dados)
        echo "Usuário salvo: {$user->getName()}";
    }
}
