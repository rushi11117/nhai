<?php

namespace App\Http\Controllers;

use App\Models\Project as ModelsProject;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projectform');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $project = new ModelsProject();
        $project->project_name = $request['project_name'];
        $project->project_location =$request['project_location'];
        $project->start_of_timeline = $request['start_of_timeline'];   
        
        $project->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
