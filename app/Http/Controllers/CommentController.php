<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments= Comment::all();
                return view('comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $user_id = auth()->id();
        $validatedData = $request->validate([
            'content' => 'required|max:100',
        ]);
        $comment = new Comment;
        $comment->user_id = $user_id;
        $comment->content = $validatedData['content'];
        $comment->post_id = $post_id;
        $comment->save();
        session()->flash('message', 'Comment was posted.');
        return redirect()->route('posts.show', $post_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
         $user_id = auth()->user()->id;
             $comment = Comment::findOrFail($id);
             return view('comment.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', ['comment' => $comment]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $comment = Comment::findOrFail($id);

        $validatedData = $request->validate([
           'content' => 'required|max:255',
        ]);

        $comment->content = $validatedData['content'];
        $comment save();

        return redirect()->route('posts.show', $comment->post_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
