<?php
class Api_Bookmark_Controller extends Base_Controller {

  public function action_update($id = null) {

    $bookmark = Bookmark::find($id);

    if(Author::user()->id != $bookmark->user_id) {
      return Response::json('Authentication error: not your bookmark!', 403);
    }
    if(is_null($bookmark)) {
      return Response::json('Bookmark not found', 404);
    }
    $updatedBookmark = Input::json();
    $bookmark->title = $updatedBookmark->title;
    $bookmark->desc = $updatedBookmark->desc;
    $bookmark->url = $updatedBookmark->url;
    //$bookmark->updated_at = Date('Y-m-d h:m:s');
    $bookmark->private = (Input::get('private') == True ? 1 : 0);
    $bookmark->save();
    return Response::eloquent($deletedBookmark);
  }

  public function action_delete($id = null) {

    $bookmark = Bookmark::find($id);

    if(Author::user()->id != $bookmark->user_id) {
      return Response::json('Authentication error: not your bookmark!', 403);
    }
    if(is_null($bookmark)) {
      return Response::json('Bookmark not found', 404);
    }
    $deletedBookmark = $bookmark;
    $bookmark->delete();
    return Response::eloquent($deletedBookmark);
  }
}
