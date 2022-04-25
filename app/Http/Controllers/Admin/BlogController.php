<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin_side.blogs.index');
    }

    public function getBlogs()
    {
        $blog = Blog::all();
        return response()->json($blog);
    }

    public function storeBlogs(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',

        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $blogs = new Blog();
        $blogs->title = $request->input('title');
        $blogs->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/blogs/', $filename);
            $blogs->image = $filename;
        }

        $blogs->image_path = $path;

        $blogs->save();
        return response()->json([
            'status' => 200,
            'message' => 'Blogs added successfully',
        ]);
    }

    public function editBlogs(Request $request)
    {
        $blogs = Blog::find($request->id);
        return $blogs;
    }

    public function updateBlogs(Request $request)
    {

        $blogs = Blog::find($request->blogs_id);

        $blogs->title = $request->input('title');
        $blogs->description = $request->input('description');


        if ($request->hasFile('image')) {

            $path = 'storage/app/public/uploads/blogs/' . $blogs->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/blogs/', $filename);
            $blogs->image = $filename;
        }

        $blogs->update();
        return response()->json([
            'status' => 200,
            'message' => 'Blogs updated successfully',
        ]);
    }

    public function deleteBlogs(Request $request)
    {
        $blogs = Blog::find($request->id);
        if($blogs)
        {
            $path = 'storage/app/public/uploads/blogs/'.$blogs->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $blogs->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Blog deleted successfully',
            ]);
        }
    }
}
