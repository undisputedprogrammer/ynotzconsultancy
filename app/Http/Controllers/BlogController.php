<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($id){
        $blog=Blog::find($id);
        $recents = Blog::orderBy('id', 'DESC')->get()->take(3);

        if($blog==null){
            abort(404);
        }
        return view('blog',compact('blog','recents'));
    }

    public function upload(){

        $blog=null;
        return view('upload', compact('blog'));
    }

    public function create(Request $request){

        // dd($request);

        if($request->file('blogimg')){

            $ext=$request->file('blogimg')->extension();
            $filename='blog_image'.time().'.'.$ext;
            $path=$request->file('blogimg')->move('storage/images',$filename);

         }else{
            $filename='default-img.png';
         }

         $blog=Blog::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'content'=>$request['code'],
            'author'=>$request->user()->name,
            'image'=>$filename,

        ]);

        return redirect('/blog'.'/'.$blog['id']);
    }

    public function edit($id,Request $request){
        // dd($request->user()->name);
        $blog=Blog::find($id);
        if($blog==null){
            abort(404);
        }
        return view('edit', compact('blog'));
    }

    public function save(Request $request, $id){
        $blog=Blog::find($id);

        if($request->file('blogimg')){
            $oldfile=$blog['image'];
            $ext=$request->file('blogimg')->extension();
            $filename='blog_image'.time().'.'.$ext;
            $path=$request->file('blogimg')->move('storage/images',$filename);
            $blog['image']=$filename;
            unlink(storage_path('app/public/images/'.$oldfile));
        }

        $blog['title']=$request['title'];
        $blog['description']=$request['description'];
        $blog['content']= $request['code'];

        $blog->save();

        return redirect('/blog'.'/'.$blog['id']);
    }

    public function destroy($id){
        $blog=Blog::find($id);
        $blog->delete();
        unlink(storage_path('app/public/images/'.$blog['image']));
        return redirect('/resources');
    }
}
