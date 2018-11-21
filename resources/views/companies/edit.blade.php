@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Projects -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('companies.update', [$company->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label for="company-name">Name<span class="required">*</span></label>
                                <input type="text"
                                    required
                                    class="form-control"
                                    id="company-name"
                                    name="name"
                                    spellcheck="false"
                                    placeholder="Enter Company Name"
                                    value="{{ $company->name }}">
                            </div>
                            <div class="form-group">
                                <label for="company-description">Description</label>
                                <textarea style="resize: vertical"
                                    class="form-control"
                                    id="company-description"
                                    name="description"
                                    rows="5"
                                    spellcheck="false"
                                    placeholder="Enter Company Description">{{ $company->description }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="col-md-4">
                <div class="p-3">
                    <h4>Options</h4>
                    <ol class="list-unstyled mb-0">
                    <li><a href="/companies/{{ $company->id }}">View Company</a></li>
                        <li><a href="/companies">List Comapnies</a></li>
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
