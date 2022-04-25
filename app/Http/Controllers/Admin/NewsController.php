<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin_side.news.index');
    }

    public function getNews()
    {
        $news = News::all();
        return response()->json($news);
    }

    public function storeNews(Request $request)
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

        $news = new News();
        $news->title = $request->input('title');
        $news->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/news/', $filename);
            $news->image = $filename;
        }

        $news->image_path = $path;

        $news->save();
        return response()->json([
            'status' => 200,
            'message' => 'News added successfully',
        ]);
    }

    public function editNews(Request $request)
    {
        $news = News::find($request->id);
        return $news;
    }

    public function updateNews(Request $request)
    {

        $news = News::find($request->news_id);

        $news->title = $request->input('title');
        $news->description = $request->input('description');


        if ($request->hasFile('image')) {

            $path = 'storage/app/public/uploads/news/' . $news->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/news/', $filename);
            $news->image = $filename;
        }

        $news->update();
        return response()->json([
            'status' => 200,
            'message' => 'News updated successfully',
        ]);
    }

    public function deleteNews(Request $request)
    {
        $news = News::find($request->id);
        if($news)
        {
            $path = 'storage/app/public/uploads/news/'.$news->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $news->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'News deleted successfully',
            ]);
        }
    }
}
