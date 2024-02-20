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
        $id = Auth()->user()->id;
        $blogs = Blog::where('id_user', $id)->get();
        return view('landingpage.blogPage.create_blog', compact('blogs'));
    }

    public function postBlog(Request $request, $id, $action)
    {
        try {
            if ($request->hasFile('image_url') && $action == 'add') {
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
                Session::flash('success', 'Your Blog Published Successfully!');
            } else {
                $blog = Blog::where('id', $request->idBlog)->first();
                $filename = null;
                if ($request->hasFile('image_url')) {
                    $file = $request->file('image_url');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('blogs'), $filename);
                }

                $blog->id_user = Auth()->user()->id;
                $blog->title = $request->postTitle;

                if ($filename) {
                    $blog->image = $filename;
                }
                $blog->tagline = $request->tagLine;
                $blog->content = $request->content;
                $blog->hastag = $request->hastag;

                $blog->save();
                Session::flash('success', 'Edit Blog Successfully!');
            }
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
        }

        return redirect()->back();
    }

    public function pageBlog()
    {
        $blogs = Blog::where('status', true)->get();
        return view('landingpage.blogPage.page_blog', compact('blogs'));
    }

    public function detailBlog($id)
    {
        $detailBlogs = Blog::where('id', $id)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        return view('landingpage.blogPage.detail_blog', compact('detailBlogs', 'blogs'));
    }

    public function deleteBlog(Request $request)
    {
        try {
            $blog = Blog::where('id', $request->idBlogDelete)->first();
            $blog->delete();
            return redirect()->back()->with('success', 'Blog has been deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function getBlogData($id)
    {
        $blog = Blog::find($id);
        return response()->json($blog);
    }

    public function publishBlog(Request $request)
    {
        $blog = Blog::where('id', $request->idBlogPublish)->first();

        $blog->status = !$blog->status;
        $blog->save();
        return redirect()->back()->with('success', 'Blog has been updated successfully');
    }
}
