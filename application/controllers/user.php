<?php

class User_Controller extends Base_Controller {

	public function action_index()
    {
      $users = User::all();
      return View::make('user.all')
                  ->with('users', $users)
                  ->with('header',"user");
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
