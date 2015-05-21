<?php namespace App\Http\Controllers;

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
     *   */

    public function getProfile()
    {
        return view('profile');
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