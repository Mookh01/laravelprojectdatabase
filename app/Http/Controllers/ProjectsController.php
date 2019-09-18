<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    //HOME
    public function home()
    {

    }
    //this will look into the file structure resources/views/projects/index.blade.php

    //INDEX
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    //CREATE
    public function create()
    {
        return view('projects.create');
    }

    //SHOW
    //original setup
    // public function show($id) {
        // $project = Project::findOrFail($id);
        //return view('projects.show', compact('project'));
    //}

    //route-model-binding ...this is type hinting
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    //EDIT
    //public function edit($id) //example.com/projects/1/edit
    public function edit(Project $project)
    {
        // return $id;
        // return view('projects.edit');
    //    $project = Project::findOrFail($id);
       return view('projects.edit', compact('project'));
    }

    //UPDATE
    //public function update($id)
    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        //dd('hello!');
        // return view('projects.update');
        //dd(request()->all());
        // $project = Project::findOrFail($id);
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    }

    //DESTROY
    //public function destroy($id)
    public function destroy(Project $project)
    {
        //dd('hello!');
        // return view('projects.destroy');
        // Project::findOrFail($id)->delete();
        $project->delete();
        return redirect('/projects');
    }

    //STORE
    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        Project::create($attributes);

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
        //return request()->all();
    }
}
