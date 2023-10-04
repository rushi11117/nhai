<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.projectslist', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('project.projectform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $project = new Project();
        $project->project_name = $request->input('project_name');
        $project->project_location = $request->input('project_location');

        if ($request->hasFile('project_shapefile')) {
            echo $request['project_name'];
            $file = $request->file('project_shapefile');
            $path = $file->store('uploads', 'public');
            $project->project_shapefile = $path;
            // echo $file;
        }


        // $project->developer_authority = $request->input('developer_authority');
        $project->date_to_start_timeline = $request->input('date_to_start_timeline');
        $project->project_description = $request->input('project_description');
        $project->save();
        // return redirect()->route('/contribute');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
