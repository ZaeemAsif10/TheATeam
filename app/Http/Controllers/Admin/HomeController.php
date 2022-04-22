<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin_side.slider.index');
    }

    public function getSlider()
    {
        $slider = Slider::all();
        return response()->json($slider);
    }

    public function storeSlider(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'title' => 'required',
            'image' => 'required'

        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $slider = new Slider();
        $slider->title = $request->input('title');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/slider/', $filename);
            $slider->image = $filename;
        }

        $slider->save();
        return response()->json([
            'status' => 200,
            'message' => 'Slider added successfully',
        ]);
    }
}
