<?php namespace App;

use Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Encryption\Encrypter;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * Nombre de la tabla en la base de datos, en caso contrario de no contener, obtiene por defecto el nombre del archivo
     * User * y supone nombre el nombre de la tabla "user"
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /*
     *  Aqui iran los nombres de los campos que el formulario ingresara a la DB.
     */

    protected $fillable = ['username', 'email', 'password'];


    /* Friends */

    public function getFullName()
    {
        return $this->username;
        //return $this->firstname . ' ' . $this->lastname;
    }

    public function friends()
    {
        //return $this->hasMany('App\User', 'user_id', 'friend_id');
        return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
    }

    public function addFriend(User $user)
    {
        $this->friends()->attach($user->id);
    }

    public function removeFriend(User $user)
    {
        $this->friends()->detach($user->id);
    }

    /* Friends End */


    // API AUTH by Juan
    public static function isValidUser($username, $password)
    {
        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return true;
        }
        return false;
    }
}



