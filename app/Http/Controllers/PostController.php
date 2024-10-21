<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Http\Requests\StorePostRequest;
// use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePostRequest $request)
    // {
    //     //
    // }

    public function store(Request $request)
    {
        
       $formFields = $request->validate([
            'title' => 'required|max:255',
            'body' =>'required'
        ]);

        $post = Post::create($formFields);
        return $post;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
       return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $post->update($formFields);
        return "AYAN NA UPDATE NA";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return "Na delete";
    }
}
