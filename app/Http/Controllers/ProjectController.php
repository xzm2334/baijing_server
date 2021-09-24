<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\projectRequest;
class ProjectController extends Controller
{

    public function index()
    {
        return Project::all();
    }

    public function store(projectRequest $request)
    {
        $banner = Project::create($request->validated());
        return $banner->fresh();
    }


    public function show(Project $project)
    {
        return $project;
    }


    public function update(projectRequest $request, Project $project)
    {
        $project->fill($request->validated())->save();
        return $project->fresh();
    }

 
    public function destroy(Project $project)
    {
        return $project->delete();
    }
}
