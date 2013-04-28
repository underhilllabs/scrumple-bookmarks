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

  // Show login form
  public function get_login()
    {
      return View::make('user.login');
    }

  // Posted login form, attempt to authenticate
  public function post_login()
    {
      if (Auth::attempt($credentials))
      {
        return Redirect::to('user/profile');
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
