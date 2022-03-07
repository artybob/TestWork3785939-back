<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Return all posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return response($posts, 200);
    }

    /**
     * Create post
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post([
            'title' => $request->title,
            'text' => $request->text,
        ]);
        $post->save();

        return response(['message' => 'Post successfully created'], 200);
    }

    /**
     * Update post
     *
     * @param PostRequest $request
     * @param $id string
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->text = $request->text;

        $post->update();

        return response(['message' => 'Post successfully updated'], 200);
    }

    /**
     * Remove post
     *
     * @param $id string
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return response('OK', 200);
    }

    /**
     * Returns single post by id
     *
     * @param int $id
     * @return  \Illuminate\Http\Response
     */

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response($post, 200);
    }
}
