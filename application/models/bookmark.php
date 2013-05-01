<?php

class Bookmark extends Eloquent
{
    protected $guarded = array();

    public static $rules = array();
    public static $timestamps = true;
    public function tags() {
      return $this->has_many('Tag');
    }
    public function user() {
      return $this->belongs_to('User');
    }
}
