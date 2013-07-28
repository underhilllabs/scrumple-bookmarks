<?php

class Tag extends Eloquent
{
    protected $guarded = array();

    public static $rules = array();
    public static $timestamps = true;
    public function bookmarks() {
      return $this->has_one('Bookmark');
    }
    public static function getTagCount($num = null) {
      // select name, count(*) from tags group by name order by 2 desc;
      if($num && $num > 0 && $num < 3000) {
        //$num = 50;
        return DB::query("select name, count(*) as count from tags group by name order by 2 desc limit $num");
      } else {
        return DB::query("select name, count(*) as count from tags group by name order by 2 desc");
      }
    }
}
