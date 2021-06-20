@extends('layouts.app')

@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Resume</div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('resumes.update', $resume->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">
                            Title<div style="color: rgba(100, 100, 100);"> (select a title for your resume)</div>
                            </label>

                                <input
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                name="title"
                                value="{{ old('title') ?? $resume->title }}"
                                required
                                autocomplete="title"
                                autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                         <div class="form-group">
                            <label for="name">
                            Name
                            </label>

                                <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name') ?? $resume->user->name}}"
                                required
                                autocomplete="name"
                                autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">
                            Email
                            </label>

                                <input
                                type="text"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') ?? $resume->email }}"
                                required
                                autocomplete="email"
                                autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="contact">
                            Contact<div style="color: rgba(100, 100, 100);"> (how to keep in touch with you)</div>
                            </label>

                                <input
                                type="text"
                                class="form-control @error('contact') is-invalid @enderror"
                                name="contact"
                                value="{{ old('contact') ?? $resume->contact}}"
                                required
                                autocomplete="contact"
                                autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="experience">
                            Experience<div style="color: rgba(100, 100, 100);"> (main jobs you have done)</div>
                            </label>

                                <input
                                type="text"
                                class="form-control @error('experience') is-invalid @enderror"
                                name="experience"
                                value="{{ old('experience') ?? $resume->experience}}"
                                required
                                autocomplete="experience"
                                autofocus>

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="education">
                            Education<div style="color: rgba(100, 100, 100);"> (certificates you got from insitutions)</div>
                            </label>

                                <input
                                type="text"
                                class="form-control @error('education') is-invalid @enderror"
                                name="education"
                                value="{{ old('education') ?? $resume->education}}"
                                required
                                autocomplete="education"
                                autofocus>

                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="skills">
                            skills<div style="color: rgba(100, 100, 100);"> (the must have list for the job you want to apply)</div>
                            </label>

                                <input
                                type="text"
                                class="form-control @error('skills') is-invalid @enderror"
                                name="skills"
                                value="{{ old('skills') ?? $resume->skills}}"
                                required
                                autocomplete="skills"
                                autofocus>

                                @error('skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="website">
                            Website
                            </label>

                                <input
                                type="text"
                                class="form-control @error('website') is-invalid @enderror"
                                name="website"
                                value="{{ old('website') ?? $resume->website }}"
                                autocomplete="website"
                                autofocus>

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="picture">
                            Picture
                            </label>

                                <input
                                type="file"
                                class="form-control @error('picture') is-invalid @enderror"
                                name="picture"
                                >

                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label for="about">
                            About<div style="color: rgba(100, 100, 100);"> (a section for tell all important information about you)</div>
                            </label>

                                <textarea 
                                class="form-control @error('about') is-invalid @enderror"
                                name="about"  style="width:100%; height: 200px;"
                                > {{ old('about') ?? $resume->about }} </textarea>
                                

                                @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a class="mr-4" href="{{route('home')}}"><img src="https://i.postimg.cc/DZ3rC19N/back-button.png"style="width:30px;height:30px;"></a>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>

                                
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
