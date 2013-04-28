<?php

class User_Controller extends Base_Controller {

	public function action_index()
    {
      $users = User::all();
      return View::make('user.all')
                  ->with('users', $users)
                  ->with('header',"user");
    }

	public function action_bookmarks($id)
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
