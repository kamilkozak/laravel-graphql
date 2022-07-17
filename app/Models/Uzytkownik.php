<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Uzytkownik
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik query()
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uzytkownik whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Uzytkownik extends Model
{
    use HasFactory;

    protected $table = 'uzytkownicy';

    protected $fillable = [
        'login',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
