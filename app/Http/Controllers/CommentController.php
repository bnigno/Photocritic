<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CommentDados;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request, $id)
    {
        $formdata = $request->all();
        $comment = new CommentDados($formdata);
        $comment->userid = $request->user()->id;
        $comment->postid = $id;
        $comment->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        $comments = CommentDados::join('users', 'comments.userid', '=', 'users.id')
                ->join('posts', 'comments.postid', '=', 'posts.id')
                ->select('comments.*','users.name','posts.id')->where('posts.id',$id)->get();
        //$comments=$comments[0];
        return $comments;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Count how many comments there are on a post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function count($id)
    {
        $count = Comment::where('postid',$id)->count();
        return $count;
    }
}
