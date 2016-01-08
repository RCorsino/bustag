<?php

namespace App;

use App\Http\Requests;
use Input;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    //
    protected $table = 'adminreg';

    protected $primaryKey = 'adminid';

    protected $fillable = ['adminname', 'adminposition', 'adminemail', 'password', 'adminbirthdate'];

    protected $hidden = ['password', 'remember_token'];
}
