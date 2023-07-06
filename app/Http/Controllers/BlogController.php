<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        // $blogs=Blog::simplePaginate(6);
        return view('welcome');   
    }

    public function index()
    {
        $blogs=Blog::where('heading','like','%%')->simplePaginate(5);
        // $blogs=Blog::all()->simplePaginate(5);
        return view('home',['blogs'=>$blogs]);
    }


    public function delete($id)
    {
        // dd($id);
        $blogs=Blog::where('id',$id)->delete();

        return redirect('/home');
        
    }

    public function view($id)
    {
        
        $blog=Blog::where('id',$id)->get();
        // dd($blog);
        // return redirect('/viewBlog'.['blog'=>$blog]);
        return view('viewBlog',['blogs'=>$blog]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'blog_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        // ]);
        
        $blog = new Blog;
        $blog->heading=$request->heading;
        $blog->content=$request->content;
        $blog->author=$request->author;
        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
        $imageName = time() . '.' . $request->blog_img->extension();
        $request->blog_img->move($path, $imageName);
        $blog->img_url=$imageName;
        $blog->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
