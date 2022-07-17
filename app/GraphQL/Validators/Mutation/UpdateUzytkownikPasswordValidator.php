<?php

namespace App\GraphQL\Validators\Mutation;

use Illuminate\Validation\Rules\Password;
use Nuwave\Lighthouse\Validation\Validator;

final class UpdateUzytkownikPasswordValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'password' => [
                'required',
                'string',
                Password::min(8),
                'confirmed'
            ],
        ];
    }
}
