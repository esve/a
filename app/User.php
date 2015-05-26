<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
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

    //relationships
}
    /*
    public function getProfile()
    {
      return $this->hasOne('App\User', 'id');
    }
    */
