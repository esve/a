<?php namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model {

    public function getProfiler()
    {
        $profile = '';
        return $profile = $this->hasOne('App\User', 'id');
    }

}
