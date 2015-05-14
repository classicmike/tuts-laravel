<?php
/**
 * Created by PhpStorm.
 * User: koramaiku
 * Date: 14/05/15
 * Time: 3:24 PM
 */

class PostController extends BaseController {
    public function listing(){
        return View::make('post.listing');
    }

    public function single($id){
        return View::make('post.single')->with('id', $id);
    }

    public function update($id){
        dd($_POST);
    }
}