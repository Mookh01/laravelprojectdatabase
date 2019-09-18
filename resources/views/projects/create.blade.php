
@extends('projects.layout')

@section('content')

        <h1>Create New Projects</h1>

            <form method="POST" action="/projects">
                {{ csrf_field() }}
            <div>
                <input type="text" name="title" placeholder="Project title" >
            </div>
            <div>
                <textarea name="description" placeholder="Project description" id="" cols="40" rows="20" required></textarea>
                </div>
                <div>
                    <button type="submit">Create Project</button>
                </div>


                
                <div  class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            
            </form>
            
@endsection