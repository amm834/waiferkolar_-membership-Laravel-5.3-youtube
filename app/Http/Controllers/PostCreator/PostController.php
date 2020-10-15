<?php

namespace App\Http\Controllers\PostCreator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostInsertRequest;
use App\Post;
use App\User;
use App\Caregory;
class PostController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {
    $posts = Post::all();
    return view('backend.creator.show',compact('posts'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create() {
    $categories = Category::all();
    $user = Auth::user();
    return view('backend.creator.create',compact('categories','user'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(PostInsertRequest $request) {
    $slug = uniqid();
    Post::create([
      'title'=>$request->get('title'),
      'content'=>$request->get('content'),
      'slug'=>$slug,
      'user_id'=>$request->get('user_id'),
      'category_id'=>$request->get('category_id'),
      ]);
      return redirect('postcreator/posts/create')->with('status','Successfuly Post Created');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id) {
    $post = Post::find($id);
    $comments = $post->comments;
    return view('backend.posts.single',compact('post'),compact('comments'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id) {
    $post = Post::whereId($id)->firstOrFail();
    $user = User::whereId($id)->firstOrFail();
    $categories = Category::all();
    return view('backend.creator.edit',compact('user','post','categories'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(PostInsertRequest $request, $id) {
    
    $post = Post::find($id);
    $post->title = $request->get('title');
    $post->content = $request->get('content');
    $post->category_id = $request->get('category_id');
    $post->update();
    return redirect(action('postcreator\PostController@edit',$id))->with('status','Successfuly  Updated');
    
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id) {
    //
  }
}