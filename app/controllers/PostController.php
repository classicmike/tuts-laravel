<?php
/**
 * Created by PhpStorm.
 * User: koramaiku
 * Date: 14/05/15
 * Time: 3:24 PM
 */

class PostController extends BaseController {
    public function listing(){
        $posts = Post::with('user')->get();

        return View::make('post.listing', compact('posts'));
    }

    public function single($id){
        $post = Post::find($id);
        return View::make('post.single')->with('post', $post);
    }

    public function insert(){
        /*$post = new Post();

        $post->title = 'A post from the insert method';
        $post->body = 'Some random gibberish';
        $post->user_id = 1;
        $post->save();*/

        $data = array(
            'title' => 'A post from the insert method, using the POST array',
            'body' => 'Some random gibberish',
            'user_id' => 1
        );

        Post::create($data);


        dd('Post inserted');
    }

    public function update($id){
        $post = Post::find($id);
        $post->user_id = 1;
        $post->save();
        dd('Post updated');
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        dd('Post with an id of: ' . $id . ' has been deleted');
    }
}