<?php
namespace App\Http\Controllers;
use App\Models\Catagory;
use App\Models\post;
use Illuminate\Http\Request;

class PostControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = Post::all();
        return view('/pages/posts/index', compact('posts'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $catagory_id = $request->get('catagory_id');
        // valid the image
        var_dump($request->hasFile('image')); 

          $image = $request->file('image')->store('post/image');
          Post::create([
                'title' => $title,
                'content' => $content,
                'image' => $image,
                'catagory_id' => $catagory_id
            ]);         
            return redirect()->back();

    }
    /** 
     * this for page catagory
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { // صفحة create
        $catagory = Catagory::all();
        return view('pages/posts/create', compact('catagory'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post, $id)
    {
        $post = Post::where('id', $id)->first();
        // dd($post);
        return view('pages/posts/show', compact('post'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post, $id)
    {
        $post = Post::where('id', $id)->first();
        $catagory = Catagory::all();
        return view('pages/posts/edit', compact('post', 'catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post, $id)
    {

        $post = Post::where('id', $id)->update(
            [
                'title' => $request->title,
                'content' => $request->content,
                'catagory_id' => $request->catagory_id
            ]
        );

        return "update single by id ";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post, $id)
    {
        Post::destroy($id);
        return "remove single by id : {$id}";

    }
}