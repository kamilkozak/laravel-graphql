<?php

namespace App\GraphQL\Mutations;

use App\Models\Uzytkownik;
use Illuminate\Support\Facades\Hash;

final class CreateUzytkownik
{
    /**
     * @param null $_
     * @param array{} $args
     */
    public function __invoke($_, array $args): Uzytkownik
    {
        $uzytkownik = new Uzytkownik();
        $uzytkownik->login = $args['login'];
        $uzytkownik->password = Hash::make($args['password']);
        $uzytkownik->save();

        return $uzytkownik;
    }
}
