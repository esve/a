<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use Redirect;
use Symfony\Component\HttpFoundation\Tests\Session\Attribute\AttributeBagTest;

class DashboardController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $not_friends = User::where('id', '!=', Auth::user()->id);
        $countFriends = count(Auth::user()->friends);
        if ($countFriends) {
            $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
        }
        $not_friends = $not_friends->get();
        //var_dump(Auth::user()->friends);
        return view('dash.index')
            ->with('not_friends', $not_friends);
    }

    public function getAddFriend($id)
    {
        $user = User::find($id);
        Auth::user()->addFriend($user);
        return Redirect::back();
    }

    public function getDelFriend($id)
    {
        $user = User::find($id);
        Auth::user()->removeFriend($user);
        return Redirect::back();
    }

}