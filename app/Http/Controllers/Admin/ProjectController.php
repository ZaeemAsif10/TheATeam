<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_detail;
use App\Models\Project_slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin_side.projects.index');
    }

    public function getProjects()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function ProjectSlider()
    {
        $project_slider = Project_slider::all();
        return view('admin_side.projects.project_slider', compact('project_slider'));
    }

    public function ProjectDetail()
    {
        $project_detail = Project_detail::all();
        return view('admin_side.projects.project_detail', compact('project_detail'));
    }

    public function createProjectSlider()
    {
        $projects = Project::all();
        return view('admin_side.projects.create_project_slider', compact('projects'));
    }

    public function createProjectDetail()
    {
        $projects = Project::all();
        return view('admin_side.projects.create_project_detail', compact('projects'));
    }

    public function storeProjects(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'name' => 'required',
            'image' => 'required',

        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $projects = new Project();
        $projects->name = $request->input('name');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/projects/', $filename);
            $projects->image = $filename;
        }

        $projects->save();
        return response()->json([
            'status' => 200,
            'message' => 'Porject added successfully',
        ]);
    }

    public function storeProjectSlider(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'project_id'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $projects = new Project_slider();
        $projects->title = $request->input('title');
        $projects->project_id = $request->input('project_id');
        $projects->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/projects/slider/', $filename);
            $projects->image = $filename;
        }

        $projects->image_path = $path;

        $projects->save();
        return redirect('project/slider')->with('message','Project slider added successfully');
    }

    public function storeProjectDetail(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'project_id'=>'required',
            'desc'=>'required',
            'payment_plain'=>'required',
        ]);

        $detail = new Project_detail();
        $detail->title = $request->input('title');
        $detail->desc = $request->input('desc');
        $detail->project_id = $request->input('project_id');

        if ($request->hasFile('payment_plain')) {
            $file = $request->file('payment_plain');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/detail/payment_plan/', $filename);
            $detail->payment_plain = $filename;
        }

        $detail->save();
        return redirect('project/details')->with('message','Project details added successfully');
    }

    public function editProjects(Request $request)
    {
        $projects = Project::find($request->id);
        return $projects;
    }

    public function editProjectSlider(Request $request)
    {
        $project_slider = Project_slider::find($request->id);
        $projects = Project::all();
        return view('admin_side.projects.edit_project_slider', compact('project_slider','projects'));
    }

    public function editProjectDetail(Request $request)
    {
        $project_detail = Project_detail::find($request->id);
        $projects = Project::all();
        return view('admin_side.projects.edit_project_detail', compact('project_detail','projects'));
    }

    public function updateProjects(Request $request)
    {

        $projects = Project::find($request->project_id);
        $projects->name = $request->input('name');

        if ($request->hasFile('image')) {

            $path = 'storage/app/public/uploads/projects/' . $projects->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/projects/', $filename);
            $projects->image = $filename;
        }

        $projects->update();
        return response()->json([
            'status' => 200,
            'message' => 'Porject updated successfully',
        ]);
    }

    public function updateProjectSlider(Request $request)
    {

        $project = Project_slider::find($request->project_slider_id);

        $project->title = $request->input('title');
        $project->project_id = $request->input('project_id');
        $project->description = $request->input('description');


        if ($request->hasFile('image')) {

            $path = 'storage/app/public/uploads/projects/slider/' . $project->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/projects/slider/', $filename);
            $project->image = $filename;
        }

        $project->update();
        return redirect('project/slider')->with('message','Project update successfullly');
    }

    public function updateProjectDetail(Request $request)
    {

        $detail = Project_detail::find($request->project_detail_id);

        $detail->title = $request->input('title');
        $detail->desc = $request->input('desc');
        $detail->project_id = $request->input('project_id');


        if ($request->hasFile('payment_plain')) {

            $path = 'storage/app/public/uploads/detail/payment_plan/' . $detail->payment_plain;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('payment_plain');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->move('storage/app/public/uploads/detail/payment_plan/', $filename);
            $detail->payment_plain = $filename;
        }

        $detail->update();
        return redirect('project/details')->with('message','Project detail update successfullly');
    }

    public function deleteProjects(Request $request)
    {
        $projects = Project::find($request->id);
        if($projects->delete())
        {
            return response()->json([
                'status' => 200,
                'message' => 'Project deleted successfully'
            ]);
        }
    }

    public function deleteProjectSlider(Request $request)
    {
        $project_slider = Project_slider::find($request->id);
        if($project_slider)
        {
            $path = 'storage/app/public/uploads/projects/slider/'.$project_slider->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $project_slider->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Blog deleted successfully',
            ]);
        }
    }

    public function deleteProjectDetail(Request $request)
    {
        $detail = Project_detail::find($request->id);
        if($detail)
        {
            $path = 'storage/app/public/uploads/detail/payment_plan/'.$detail->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $detail->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Project detail deleted successfully',
            ]);
        }
    }

    public function AllProjects()
    {
        $projects = Project::all();
        return view('web-side.all_projects', compact('projects'));
    }
}
