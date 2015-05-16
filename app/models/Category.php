<?php
/**
 * Created by PhpStorm.
 * User: koramaiku
 * Date: 16/05/15
 * Time: 5:16 PM
 */

class Category extends Eloquent {
    public function users(){
        return $this->belongsToMany('User');
    }
}