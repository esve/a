<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use Symfony\Component\HttpFoundation\Tests\Session\Attribute\AttributeBagTest;

class ProfileController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Profile Controller
    |--------------------------------------------------------------------------
    |
    | Controlara pagina de perfil
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getProfile()
    {
        /* meto informacion del usuario en mi variable */
        //$usuario = Auth::user();
        $myid = Auth::user()->id;
        $usuario = User::find($myid);
        $games = ['CS:GO','Dota','LoL','CS 1.6'];

        /* Formula extra get todos los usuarios */
        //$usuario = User::get();

        /* Una vez con variable, la ingreso, Opcion 1 */


         return view('profile')
            ->with('miuser', $usuario)
            ->with('games', $games);

        /* Una vez con variable, la ingreso, Opcion 2  */
        //return view('profile', ['miuser' => $usuario]);

        // debug
        // dd($user);


        /*
        Query Mas detallado
        */

        /*
        $users = User::select('id', 'firstname')
            ->with('getProfile')
            ->where('firstname', 'Jean')
            ->orderBy('firstname', 'ASC')
            ->get();

        */

        /*
        muestra informacion de arriba y la ordena mejor como un array
        dd($users->toArray());
        */
    }

    public function editProfile()
    {
        return view('editProfile');
    }

    public function updateProfile()
    {
        //
    }


    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('profile');
    }

}