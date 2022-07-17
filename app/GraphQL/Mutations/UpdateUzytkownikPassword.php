<?php

namespace App\GraphQL\Mutations;

use App\Models\Uzytkownik;
use Illuminate\Support\Facades\Hash;

final class UpdateUzytkownikPassword
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args): ?Uzytkownik
    {
        $uzytkownik = Uzytkownik::query()->find($args['id']);

        if(!$uzytkownik instanceof Uzytkownik){
            return null;
        }

        $uzytkownik->password = Hash::make($args['password']);
        $uzytkownik->save();

        return $uzytkownik;
    }
}
