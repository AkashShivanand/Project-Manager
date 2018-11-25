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
                    <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                    <li><a href="/projects/create">Add Project</a></li>
                    <hr>
                    <li>
                        <a href="#"
                            onclick="
                                var result = confirm('Are you sure you wish to delete this company?');
                                if(result) {
                                    event.preventDefault();
                                    document.getElementById('delete-form').submit();
                                }
                            ">Delete
                        </a>

                        <form id="delete-form"
                            action="{{ route('companies.destroy', [$company->id]) }}"
                            method="POST"
                            style="display:none;">
                            <input type="hidden" name="_method" value="delete" />
                            {{ csrf_field() }}
                        </form>
                    </li>
                    </ol>
                </div>
            </aside>
        </div>
    </div> <!-- /container -->
@endsection
