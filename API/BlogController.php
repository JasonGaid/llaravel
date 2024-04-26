<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->category = $request->input('category');
        $blog->image = $request->input('image');
        $blog->save();

        return response()->json([
            'status' => 200,
            'message' => 'Blog created successfully'
        ]);
    }

    public function fetch()
    {
        $blogs = Blog::all();
        return response()->json($blogs);
    }

    
}