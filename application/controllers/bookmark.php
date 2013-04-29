<?php

class Bookmark_Controller extends Base_Controller {

	public function action_index()
    {
      $bookmarks = Bookmark::with('tags')
                  ->order_by('created_at','desc')
                  ->paginate(25);
      return View::make('bookmark.index')
                  ->with('bookmarks', $bookmarks);
    }

	public function action_show($id)
    {
      $bookmark = Bookmark::find($id);
      return View::make('bookmark.show')
                  ->with('bookmark', $bookmark);
    }

	public function action_new()
    {
      if(Auth::user()) {
        return View::make('bookmark.new');
      } else {
        return Redirect::to('/user/login');
      }
    }

	public function action_create()
    {

    }

	public function action_edit()
    {

    }

}
