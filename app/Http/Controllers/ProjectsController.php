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
    public function show($id)
    {
        $project = ProjectOrFailOrFail($id);
        return view('projects.show', compact('projects'));
    }

    //EDIT
    public function edit($id) //example.com/projects/1/edit
    {
        // return $id;
        // return view('projects.edit');
       $project = ProjectOrFailOrFail($id);
       return view('projects.edit', compact('project'));
    }

    //UPDATE
    public function update($id)
    {
        //dd('hello!');
        // return view('projects.update');
        //dd(request()->all());
        $project = ProjectOrFailOrFail($id);
        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    //DESTROY
    public function destroy($id)
    {
         //dd('hello!');
        // return view('projects.destroy');
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }

    //STORE
    public function store()
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
        //return request()->all();
    }
}
