<?php
class Api_Tag_Controller extends Base_Controller {
  public function action_show($num = null) {
    // sanitize input number
    $num = filter_var($num, FILTER_SANITIZE_NUMBER_INT);
    $tags = Tag::getTagCount($num);
    return Response::json($tags);
  }
}
