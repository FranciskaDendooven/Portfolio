<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => ['required'],
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);

        if ($request->hasFile('image')){
            $image = $request->image;

            $image_path = 'images/projects/';
            $image_name = time() . '-'  . pathinfo($image,PATHINFO_FILENAME) . '.' . $image->extension();
            
            $image->storeAs($image_path, $image_name);

            Project::create([
                'skill_id' => $request->skill_id,
                'name' => $request->name,
                'image' => $image_path . $image_name,
                'project_url' => $request->project_url,
            ]);

            return Redirect::route('projects.index')->with('message', 'Project created successfully!');
        }

        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $image = $project->image;

        $request->validate([
            'skill_id' => ['required'],
            'name' => ['required', 'min:3'],
        ]);

        if($request->hasfile('image')){
            Storage::delete($project->image);
            $image = $request->image;

            $image_path = 'images/projects/';
            $image_name = time() . '-'  . pathinfo($image,PATHINFO_FILENAME) . '.' . $image->extension();
            
            $image->storeAs($image_path, $image_name);
        }

        $project->update([
            'skill_id' => $request->skill_id,
            'name' => $request->name,
            'project_url' => $request->project_url,
            'image' => $image_path . $image_name, 
        ]);
        return Redirect::route('projects.index')->with('message', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return Redirect::back()->with('message', 'Project deleted successfully!');
    }
}
