<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    protected $blogs;
    protected $blog;

    public function index()
    {
        return view('blog');
    }
    public function create(Request $request)
    {
        $this->blog=new blog();
        $this->blog->title=$request->title;
        $this->blog->author=$request->author;
        $this->blog->description=$request->description;
        $this->blog->save();

        return redirect()->back()->with('message','Blog Data has been saved successfully.');

    }
    public function manage()
    {
        $this->blogs=Blog::orderBy('id','desc')->get();
        return view('manage-blog',['blogs'=>$this->blogs]);
    }
}
