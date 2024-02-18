<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        return view('landingpage.blogPage.index');
    }

    public function postBlog(Request $request, $id)
    {
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
        // dd($request, $request->file('image'));
        return redirect()->back();
    }
}
