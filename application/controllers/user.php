<?php

class User_Controller extends Base_Controller {

  public $restful = true;

	public function get_index()
    {
      $users = User::all();
      return View::make('user.all')
                  ->with('users', $users)
                  ->with('header',"user");
    }

	public function get_bookmarks($id)
    {
      $user = User::find($id);
      $bookmarks = Bookmark::with('tags')
                  ->where('user_id', '=', $id)
                  ->order_by('created_at','desc')
                  ->paginate(25);
      return View::make('user.bookmarks')
                  ->with('user', $user)
                  ->with('bookmarks', $bookmarks);

    }

  // Show registration form
  public function get_register()
    {
      return View::make('user.register');
    }
  public function post_register()
    {
      if(Input::get('inputPassword') == Input::get('inputPassword2'))
      {
        $user = new User;
        $user->username = Input::get('inputName');
        $user->email = Input::get('inputEmail');
        $user->password = Hash::make(Input::get('inputPassword'));
        $user->save();
      } else {
        $message = "Passwords don't match!";
        return View::make('user.register')->with('message',$message);
      }
      return View::make('user.profile');
    }

  // Show login form
  public function get_login()
    {
      return View::make('user.login');
    }

  // Posted login form, attempt to authenticate
  public function post_login()
    {
      $email = Input::get('inputEmail');
      $password = Input::get('inputPassword');
      $credentials = array('username' => $email, 'password' => $password);
      if (Auth::attempt($credentials))
      {
        return Redirect::to('/user/'.Auth::user()->id.'/bookmarks');
        //return View::make('user.bookmarks');
      }
      else
      {
        $flash = "Authentication unsuccessful!";
        return View::make('user/login')->with('message', $flash);
      }

    }

  public function get_profile($id)
    {
      return View::make('user.profile');
    }

	public function action_show()
    {

    }

	public function action_create()
    {

    }

	public function action_edit()
    {

    }
}
