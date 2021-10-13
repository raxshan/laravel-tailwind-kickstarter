<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    // Create
    public function create()
    {
        $blogs = Blog::all();
        return view('blog', ['blogs' => $blogs]);
    }

    // Store | Insert
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = new Blog;
        
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->save();

        return redirect()->back()->with('message', 'New blog posted successfully!');
    }

    // Blog Details
    public function details(Blog $id)
    {
        $blogs = Blog::all();
        return view('blog', ['blogs' => $blogs, 'blog_details' => $id]);
    }

    // Blog Update
    public function update($id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = Blog::find($id);
        
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->update();

        return redirect()->back()->with('message', 'Your blog updated successfully!');
    }

    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->with('message', 'Blog deleted successfully!');
    }
}
