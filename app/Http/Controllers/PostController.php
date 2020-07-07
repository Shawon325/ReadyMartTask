<?php

namespace App\Http\Controllers;

use App\Post;
use Arr;
use Validator;
use Toastr;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_data = Post::where('post_type', 1)->get();
        $image_data = Post::where('post_type', 2)->get();
        return view('Backend.Post.view_post', [
            'video_data' => $video_data,
            'image_data' => $image_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Post.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $post_model = new Post;
        $requestData = $request->all();
        $validationRules = $post_model->validation();
        if ($request->post_type == 1) {
            // type is video
            $validationRules = Arr::add($validationRules, "video", "required|unique:posts,video");
        } else if ($request->post_type == 2) {
            $validationRules = Arr::add($validationRules, "image", "required|unique:posts,image");
        } else {
            $validationRules = $validationRules;
        }
        $validate = Validator::make($requestData, $validationRules);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($requestData);
        } else {
            if ($request->hasFile('image')) {
                $image_type = $request->file('image')->getClientOriginalExtension();
                $path = "backend_assets/images/";
                $name = "Post_" . time() . "." . $image_type;
                $full_path = $path . $name;
                $request->file('image')->move($path, $name);
                $requestData = Arr::set($requestData, 'image', $full_path);
            }
            $post_model->fill($requestData)->save();
            Toastr::success('Post Save', 'Success', ["positionClass" => "toast-bottom-right"]);
            return back();

        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post_data = Post::findOrFail($id);
        if ($post_data->status == 1) {
            $post_data->update(['status' => 0]);
        } else {
            $post_data->update(['status' => 1]);
        }
        Toastr::success('Post published', 'Success', ["positionClass" => "toast-bottom-right"]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
