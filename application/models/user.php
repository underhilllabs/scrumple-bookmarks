<?php

class User extends Eloquent
{
    protected $guarded = array();

    public static $rules = array();
    public static $timestamps = true;

    public function bookmarks()
    {
        return $this->has_many('Bookmark');
    }
}
