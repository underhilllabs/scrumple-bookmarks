<?php

class User extends Eloquent
{
    protected $guarded = array();

    public static $rules = array();
    public static $timestamps = true;

    public function bookmarkCount() {
      return DB::table('bookmarks')->where('user_id', '=', $this->id)->count();
    }

    public function bookmarks() {
        return $this->has_many('Bookmark');
    }
}
