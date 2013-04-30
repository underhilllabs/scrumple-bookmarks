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
      if(Auth::user()) {
        $user_id = Auth::user()->id;
        $bookmark = new Bookmark;
        $bookmark->user_id = $user_id;
        $bookmark->url = Input::get('address');
        $bookmark->title = Input::get('title');
        $bookmark->desc = Input::get('desc');
        $bookmark->save();
        $bid = $bookmark->id;
        if(!$bid) {
          die("no bookmark id!");
        } else {
          // split on a comma and optional space
          foreach(preg_split("/,[\s]*/", Input::get('tags')) as $tag_name) {
            $tag = new Tag;
            $tag->user_id = $user_id;
            $tag->bookmark_id = $bid;
            $tag->name = $tag_name;
            $tag->save();
          }
        }
        return Redirect::to('/user/'.$user_id.'/bookmarks');
      }
    }

	public function action_edit()
    {

    }

}
