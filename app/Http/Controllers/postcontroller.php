<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class postcontroller extends Controller
{
    public function index(){
        $posts = post::orderby('created_at','desc')->get();

        return view('test',compact('posts'));
    }
public function create(){

}
public function update(Request $request, Post $post)
    {
        $newData = $request->validate([
            'content' =>  ['required', 'string', 'min:3', 'max:1000'],
        ]);

        $post->update($newData);

        //return redirect()->route('post.index');
        return redirect()->back()->with('success', 'Post update successfully.');
    }
public function store (Request $request){

    $this->validate($request, [
        'content' => ['required', 'string', 'min:3', 'max:1000'],
    ]);

    Post::create([
        'content'=> $request->content,
    ]);

    return redirect()->route('post.index');
    
}
public function edit(Post $post){
    return view('post.edit',compact('posts'));
}
public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }


}
