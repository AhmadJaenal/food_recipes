<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function createBlog()
    {
        return view('landingpage.blogPage.create_blog');
    }

    public function postBlog(Request $request, $id)
    {
        try {
            if ($request->hasFile('image_url')) {
                $file = $request->file('image_url');
                $file->move('blogs/', $file->getClientOriginalName());
                $filename = $file->getClientOriginalName();
                $user = Blog::create([
                    'id_user' => $id,
                    'title' => $request->postTitle,
                    'image' => $filename,
                    'tagline' => $request->tagLine,
                    'content' => $request->content,
                    'hastag' => $request->hastag,
                ]);
                Session::flash('message', 'Success');
            }
        } catch (\Throwable $th) {
            Session::flash('error', 'Failed');
        }

        return redirect()->back();
    }

    public function pageBlog()
    {
        $blogs = Blog::all();
        return view('landingpage.blogPage.page_blog', compact('blogs'));
    }

    public function detailBlog($id)
    {
        $detailBlogs = Blog::where('id', $id)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        return view('landingpage.blogPage.detail_blog', compact('detailBlogs', 'blogs'));
    }
}
