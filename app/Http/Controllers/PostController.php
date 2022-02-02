<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Requests\PostRequest;
use App\Category;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('post/index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
     public function show(Post $post )
     {
        $comment = new Comment;

       $comments = $comment->where('post_id',$post->id)->get();
       
      return view('post/show', ['post' => $post,'comments' => $comments ]);

    }   
    
    // public function create()
    // {
    //      return view('posts/create');
    // }
    
    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
         $input ['user_id']= $request->user()->id; 
         
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
        public function edit(Post $post)
    {
        return view('post/edit')->with(['post' => $post]);
    }
    
        
        public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
       
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
        
        public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

         public function create(Category $category)
    {  
        
        return view('post/create')->with(['categories' => $category->get()]);;
    }
}
