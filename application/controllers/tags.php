<?php

class Tags_Controller extends Base_Controller {

	public function action_index() {
    $tags = Tag::getTagCount();
    return View::make('tags.index')
      ->with('tags', $tags);
  }

	public function action_show($name) {
    $tag = Tag::where('name','=',$name)->first();
    $bookmarks = DB::table('bookmarks')
      ->join('tags', 'bookmarks.id', '=', 'tags.bookmark_id')
      // must use tag name, not id since tags table has many tuples with same tag name
      // @TODO normalize tags table
      ->where('tags.name','=',$name)
      ->order_by('bookmarks.updated_at','desc')
      //->get(array('bookmarks.title','bookmarks.url','bookmarks.created_at'))
      ->paginate(25, array('title','url','bookmarks.created_at'));
    return View::make('tags.show')
      ->with('tag',$tag)
      ->with('bookmarks', $bookmarks);
  }
}
