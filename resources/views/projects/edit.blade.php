
@extends('projects.layout')

@section('content')
    <h1 class="title">Edit Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">

        <!-- {{ csrf_field() }}
        {{ method_field('PATCH') }} -->

        <!-- blade.php has shorthand for the above code -->
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
            <textarea class="textarea" name="description" >{{ $project->description }}</textarea>
            </div>
        </div>
            <button class="submit">Update Project</button>
    </form>

        <form method="POST" action="/projects/{{ $project->id }}">
            @method('DELETE')
            @csrf

            <div  class="field">
                <div class="control">
                    <button class="submit" class="button">Delete Project</button>
                </div>
            </div>

            @if ($errors->any())
                <div class="notification is-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>

@endsection