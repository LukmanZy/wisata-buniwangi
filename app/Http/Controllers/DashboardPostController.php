<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts'=> Post::all()
        ] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validateData =  $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'tiket' => 'required',
            'loc' => 'required',
            'image1' => 'image|file|max:2024',
            'image2' => 'image|file|max:2024',
            'desc' => 'required'
        ]);
        
        $validateData['image1'] = $request->file('image1')->store('post-images');
        $validateData['image2'] = $request->file('image2')->store('post-images');
        $validateData['image3'] = $request->file('image3')->store('post-images');
        $validateData['image4'] = $request->file('image4')->store('post-images');
        $validateData['image5'] = $request->file('image5')->store('post-images');
        $validateData['excert'] =Str::limit(strip_tags($request->desc), 100);

        Post::create($validateData);

        return redirect('/dashboard/posts') -> with('success', "Wisata baru telah ditambahkan!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'name' => 'required|max:255',
            'loc' => 'required',
            'tiket' => 'required',
            'image1' => 'image|file|max:2024',
            'image2' => 'image|file|max:2024',
            'image3' => 'image|file|max:2024',
            'image4' => 'image|file|max:2024',
            'image5' => 'image|file|max:2024',
            'desc' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image1')) {
            if ($request -> oldImage) {
                Storage::delete($request -> oldImage);
            }
            $validateData['image1'] = $request -> file('image1') -> store('post-images');
        }

        if ($request -> file('image2')) {
            if ($request -> oldImage) {
                Storage::delete($request -> oldImage);
            }
            $validateData['image2'] = $request -> file('image2') -> store('post-images');
        }

        if ($request -> file('image3')) {
            if ($request -> oldImage) {
                Storage::delete($request -> oldImage);
            }
            $validateData['image3'] = $request -> file('image3') -> store('post-images');
        }

        if ($request -> file('image4')) {
            if ($request -> oldImage) {
                Storage::delete($request -> oldImage);
            }
            $validateData['image4'] = $request -> file('image4') -> store('post-images');
        }

        if ($request -> file('image5')) {
            if ($request -> oldImage) {
                Storage::delete($request -> oldImage);
            }
            $validateData['image5'] = $request -> file('image5') -> store('post-images');
        }

        $validateData['excert'] =Str::limit(strip_tags($request->desc), 200);

        Post::where('id', $post->id)
                -> update($validateData);

        return redirect('/dashboard/posts') -> with('success', "Wisata telah di Update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post -> image1);
        Storage::delete($post -> image2);
        Storage::delete($post -> image3);
        Storage::delete($post -> image4);
        Storage::delete($post -> image5);
        
        Post::destroy($post->id);
        return redirect('/dashboard/posts') -> with('success', 'Data berhasil di hapus!');
    }

    // public function checkSlug(Request $request) 
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->name);
    //     return response()->json(['slug' => $slug]);
    // }
}
