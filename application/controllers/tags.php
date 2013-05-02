<?php

class Tags_Controller extends Base_Controller {

	public function action_index()
    {
      $tags = Tag::getTagCount();
      return View::make('tags.index')
                  ->with('tags', $tags);
    }

	public function action_show($id)
    {
      $tag = Tag::where('name','=',$id)->first();
      $bookmarks = DB::table('bookmarks')
                    ->join('tags', 'bookmarks.id', '=', 'tags.bookmark_id')
                    ->where('tags.name','=',$id)
                    ->order_by('bookmarks.updated_at','desc')
                    //->get(array('bookmarks.title','bookmarks.url','bookmarks.created_at'))
                    ->paginate(25, array('title','url','bookmarks.created_at'));
      return View::make('tags.show')
                  ->with('tag',$tag)
                  ->with('bookmarks', $bookmarks);

    }
}
