<?php

namespace App\GraphQL\Validators\Mutation;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Nuwave\Lighthouse\Validation\Validator;

final class CreateUzytkownikValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'login' => [
                'required',
                'string',
                Rule::unique('uzytkownicy', 'login'),
            ],
            'password' => [
                'required',
                'string', Password::min(8),
                'confirmed'
            ],
        ];
    }
}
