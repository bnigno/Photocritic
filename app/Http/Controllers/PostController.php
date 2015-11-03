<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PostDados;
use Carbon\Carbon;
use Storage;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $posts = PostDados::join('users', 'posts.userid', '=', 'users.id')
                ->select('posts.id', 'posts.created_at' ,'users.name')->orderBy('posts.created_at','desc')->get();
        //$posts = $posts[0];
        //$commentsNumber = array();
        /*foreach ($posts as $post) {
            $count = CommentController::count($post->$id);
            array_push($commentsNumber, $count);
        }*/
        //dd(compact('posts'));
        $userId = Auth::id();
        return view('lista', compact('posts'),compact('userId'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        $userId = Auth::id();
        return view('create',compact('userId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        //dd($request);
        $formdata = $request->all();
        $post = new PostDados($formdata);
        $user = $request->user()->id;
        $post->userid=$user;
        //dd($post);
        $post->save();
        $filename = $post->id.".".$request->file('photo')->getClientOriginalExtension();
        //$post->photo = $filename."."$request->file('photo')->getClientOriginalExtension();
        Storage::put("/img/".$filename, file_get_contents($request->file('photo')->getRealPath()));
        PostDados::where('id',$post->id)->update(['photo'=>$filename]);
        return redirect('posts/edit/'.$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        $post = PostDados::join('users', 'posts.userid', '=', 'users.id')
                ->select('posts.*','users.name')->where('posts.id',$id)->get();
        $post=$post[0];
        $comments = CommentController::show($id);
        $userId = Auth::id();
        return view('view',compact('post'),compact('comments','userId'));
    }

    public function getUser($id)
    {
        $posts = PostDados::join('users', 'posts.userid', '=', 'users.id')
                ->select('posts.*','users.name')->where('users.id',$id)->
                orderBy('posts.id','desc')->get();
        //$post=$post[0];
        $userId = Auth::id();
        return view('lista',compact('posts'),compact('comments','userId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $post = PostDados::join('users', 'posts.userid', '=', 'users.id')
                ->select('posts.*','users.name')->where('posts.id',$id)->get();
        $post=$post[0];
        $userId = Auth::id();
        return view('create',compact('post'),compact('userId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        $formdata = $request->all();
        $post = new PostDados($formdata);
        PostDados::where('id',$id)->
                update(['aperture' => $post->aperture, 'exposure_time' => $post->exposure_time,
                    'iso' => $post->iso,'camera' => $post->camera,
                    'focal_length' => $post->focal_length]);
        return redirect('posts/');
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
