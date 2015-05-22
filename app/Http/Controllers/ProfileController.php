<?php namespace App\Http\Controllers;

use App\User;

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

    /**
     * getProfile
     *
     **/

    public function getProfile()
    {
        $user = User::first();
        //dd($user->firstname);
        return view('profile');
        //dd($user->getProfile->email);
        //Mi informacion

        //$users = User::get();

        /*
        mas especifico

        $users = User::select('id', 'firstname')
            ->with('getProfile')
            ->where('firstname', 'Jean')
            ->orderBy('firstname', 'ASC')
            ->get();

        */

        /*
        muestra informacion y la ordena mejor como un array
        dd($users->toArray());
        */
    }

    public function editProfile()
    {
        return view('editProfile');
    }

    public function updateProfile()
    {
        $file = Input::file('pic');
        $profile = Profile::Where('id', '=', Auth::user()->id->get());
        $profile->firstname = Input::get('firstname');

        $fileName = Str::random(8);
        $extension = $file->getClientOriginalExtension();
        $name = $fileName.'.'.$extension;

        $profile->profilePic = '/images/'.$name;
        $profile->save();

        $file->move('/images/', $name);

        return $profile->profilePic;
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