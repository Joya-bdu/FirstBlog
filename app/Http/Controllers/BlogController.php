<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; 

class BlogController extends Controller
{
    //show all blogs
    public function index()
    {
        $blogs = Blog::paginate(5); 
        return view('blog.index', compact('blogs'));
    }
    //to create a new blog
    public function create()
    {
        return view('blog.create');
    }
    //store a new blog
    public function store(Request $request)
    {
       $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $blog = new Blog();
        $blog->title = $validated['title'];
        $blog->description = $validated['description'];
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

}
