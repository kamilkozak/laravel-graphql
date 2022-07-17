<?php

namespace App\GraphQL\Queries;


use App\Models\Uzytkownik as UzytkownikModel;

final class Uzytkownik
{
    /**
     * @param null $_
     * @param array{} $args
     */
    public function __invoke($_, array $args): ?UzytkownikModel
    {
        return UzytkownikModel::query()->find($args['id']);
    }
}
