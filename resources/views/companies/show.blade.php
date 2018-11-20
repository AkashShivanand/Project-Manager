@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">{{ $company->name }}</h1>
            <p>{{ $company->description }}</p>
            {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> --}}
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Projects -->
            <div class="col-md-8">
                <div class="row">
                    @foreach ($company->projects as $project)
                    <div class="col-md-6">
                        <h2>{{ $project->name }}</h2>
                        <p>{{ $project->description }}</p>
                        <p><a class="btn btn-secondary" href="/project/{{ $project->id }}" role="button">View project »</a></p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="col-md-4">
                <div class="p-3">
                    <h4>Options</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                        <li><a href="#">Add new member</a></li>
                    </ol>
                </div>

            {{-- <div class="p-3">
                <h4 class="font-italic">Members</h4>
                <ol class="list-unstyled">
                    <li><a href="#">User 1</a></li>
                </ol>
            </div> --}}
            </aside>
        </div>
    </div> <!-- /container -->
@endsection
