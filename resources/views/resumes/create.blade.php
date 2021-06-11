@extends('layouts.app')

@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Resume</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('resumes.store') }}">
                        @csrf
                         <div class="row justify-content-center">
                         Add a title for your resume
                         </div>
                        <div class="form-group row mt-3">
                            <label for="title" class="col-md-4 col-form-label text-md-right">
                            Title
                            </label>

                            <div class="col-md-6">
                                <input
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                name="title"
                                value="Eg: Teacher Resume"
                                required
                                autocomplete="title"
                                autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                
                                
                            </div>
                        </div>    
                    </form>
                </div>
            </div>    
            <div class="row justify-content-left"><a class="ml-4 mt-3" href="{{route('home')}}"><img src="/storage/pictures/back-button.png"style="width:30px;height:30px;"></a></div>
        </div>
    </div>
</div>

@endsection
