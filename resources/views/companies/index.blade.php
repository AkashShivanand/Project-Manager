@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-header bg-success">
            Companies
            <a class="btn btn-primary float-right" href="/companies/create">Add new company</a>
        </div>
        <ul class="list-group list-group-flush">
        @foreach ($companies as $company)
        <li class="list-group-item"><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
        @endforeach
        </ul>
    </div>
</div>
@endsection
