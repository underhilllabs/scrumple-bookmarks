<?php

class Tag extends Eloquent
{
    protected $guarded = array();

    public static $rules = array();
    public static $timestamps = true;
    public function bookmarks() {
      return $this->has_many('Bookmark');
    }
    public static function getTagCount() {
      // select name, count(*) from tags group by name order by 2 desc;
      return DB::query("select name, count(*) as count from tags group by name order by 2 desc");
    }
}
