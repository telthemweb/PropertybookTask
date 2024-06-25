<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('home')
                ->withErrors($validator)
                ->withInput();
        }

        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->type= $request->type;
        if ($file = $request->file('image')) {
            $full_file_name = $file->getClientOriginalName();
            $name = pathinfo($full_file_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $image_name_to_store = $name . '_' . time() . '.' . $extension;
            $path = $file->move('uploads', $image_name_to_store);
            $post->image = $path;
        }
        $post->save();
        return redirect()->route('home')->withInput()->with('success', 'Successfully Added Post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post =  Post::findOrFail($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->type= $request->type;
        if ($file = $request->file('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            } 

            $full_file_name = $file->getClientOriginalName();
            $name = pathinfo($full_file_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $image_name_to_store = $name . '_' . time() . '.' . $extension;
            $path = $file->move('uploads', $image_name_to_store);
            $post->image = $path;
        }
        $post->update([$post]);

        return redirect()->route('home')->with('success', 'Successfully updated Post');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Successfully deleted Post');
    }
}
