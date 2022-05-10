<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'login','avatar_url','public_repos','followers','following'];

    /* public string $name;
    public string $login;
    public string $avatar_url;
    public int $public_repos;
    public int $followers;
    public int $following; */

    /* private function deleteUser(string $login)
    {
        $user = 
    } */

    
}
