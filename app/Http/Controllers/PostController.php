<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    public function postCreatePost(Request $request) {
        // Validation
        $this->validate($request, [
            'body' => 'required|max:200'
        ]);

        $post = new Post();
        $post->body = $request['body'];
        $message = 'There Was An Error';

        if ($request->user()->posts()->save($post)){
            $message = 'Post Send';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }
}