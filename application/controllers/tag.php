<?php

class Tag_Controller extends Base_Controller {

	public function action_index()
    {
      $tags = Tag::getTagCount();
      return View::make('tags.index')
                  ->with('tags', $tags);
    }

	public function action_show($id)
    {
      $bookmark = Bookmark::find($id);
      return View::make('bookmark.show')
                  ->with('bookmark', $bookmark);
    }
}
