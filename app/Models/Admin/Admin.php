<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    protected $table = 'admin';


    public static function userExists(string $username): ?array
{
    $user = self::where('username', $username)->first();

    return $user ? $user->toArray() : null;
}

}
