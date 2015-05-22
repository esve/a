<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
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

    //protected $fillable = ['name', 'email', 'password'];
    protected $fillable = ['username', 'email', 'password'];

    //relationships

    public function getProfile()
    {
      return $this->hasOne('App\User', 'id');
    }


    /**
     * Informacion Global del perfil del Usuario Logeado (Local)
     */

    public function getCountry()
    {
        $user = Auth::user();

        return $user->country_code;
    }


}
