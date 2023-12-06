<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        $user = Auth::user();
        return view('forum', ['posts' => $posts, 'user' =>$user]);
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'content' => 'required|min:3'
        ]);

        $user = auth()->user();

        $post = new Post();
        $post -> content = $request -> content;
        $post -> user_id = $user ->id;
        $post -> save();

        return redirect('/forum')->with('success', 'Post added successfully');
    }

    public function update(Request $request)
    {
        $user = auth()->user();


        $post = Post::find((int)$request->postId);

        if($user->id != $post->user_id){
            return redirect('/forum')->with('error', 'Unauthorized action');
        }


        $post->content = $request->content;
        $post->save();

        return response()->json(['success' => 'Post updated successfully']);

    }

    public function destroy(string $id)
    {
        $user = auth()->user();

        $post = Post::find((int)$id);

        if($user->id != $post->user_id){
            return redirect('/forum')->with('error', 'Unauthorized action');
        }

        Post::destroy((int)$id);
        return redirect('/forum')->with('success', 'Post deleted successfully');
    }


    
}
