
@extends('projects.layout')

@section('content')

        <h1>Create New Projects</h1>

            <form method="POST" action="/projects">
                {{ csrf_field() }}
            <div>
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}" >
            </div>
            <div>
                <textarea name="description" placeholder="Project description" id="" cols="40" rows="20" value="{{ old('description') }}" ></textarea>
                </div>
                <div>
                    <button type="submit">Create Project</button>
                </div>


                @if ($errors->any())
                <div  class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
            
@endsection