<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Database\Eloquent\Model;

class AuthenticationAPI extends Controller
{
    // API AUTH by Juan
    public function ownAuthentication($username, $password)
    {
        $response = array("valid"=>User::isValidUser($username, $password));
        $responseJSON = json_encode($response);
        return $responseJSON;
    }
}