<?php

namespace App\Http\Controllers;

use DB;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }


    public function index()
    {
       
       return view('projects.index',[
            'projects' =>  Project::latest()->paginate()
       ]);

    //    $portfolio = Project::latest()->paginate();
    //    return view('portfolio', compact('portfolio'));
    }

    public function show(Project $project)
    {
       
        return view('projects.show',[
            'project'=> $project
            // Project::findOrFail($id)
        ]);
        
    }

    public function create()
    {
        return view('projects.create',[
            'project'=> new Project
        ]);
    }


    public function store( SaveProjectRequest $request )
    {
        // $fields = request()->validate([
        //     'title' => 'required',
        //     'url' => 'required',
        //     'description' => 'required',
        // ]);
        Project::create( $request -> validated() );

        return redirect()->route('projects.index')->with('status','El proyecto fue creado con éxito');
    }


    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project'=> $project
           
        ]);
    }


    public function update(Project $project, SaveProjectRequest $request)
    {
        
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con éxito');
    }


    public function destroy(Project $project)
    {
        $project->delete();


        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con éxito');
    }


}
// $portfolio = DB::table('projects')->get();
// orderBy('created_at', 'DESC') esto va despues de los doble puntos mas el get
 // Project::findOrFail($id)