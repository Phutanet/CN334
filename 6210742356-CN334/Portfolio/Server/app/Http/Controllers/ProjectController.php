<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();

        return response()->json([
            'status' => 200,
            'projects' => $projects
        ]);

    }

    public function store(Request $req)
    {
        $project = new Project;
        $project->nameProject = $req->input('nameProject');
        $project->linkProject = $req->input('linkProject');
        $project->save();

        return response()->json([
            'status' => 200,
            'message' => 'Project Added Successfully'
        ]);
    }

    public function read($id)
    {
        $project = Project::find($id);

        return response()->json([
            'status' => 200,
            'project' => $project
        ]);
    }

    public function edit(Request $req, $id)
    {
        $project = Project::find($id);
        $project->nameProject = $req->input('nameProject');
        $project->linkProject = $req->input('linkProject');
        $project->save();

        return response()->json([
            'status' => 200,
            'message' => 'Project Edited Successfully'
        ]);
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project -> delete();

        return response()->json([
            'status' => 200,
            'message' => 'Project Deleted Successfully'
        ]);
    }
}
