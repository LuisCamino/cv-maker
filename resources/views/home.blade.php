@extends('layouts.app')

@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                

                <div class="card-body">
                
                   <h3 class="h3">
                       Welcome {{$user->name}}
                   </h3>
                    <hr>
                    <ul>
                       <p class="mt-3"><a class="btn btn-md btn-primary" href="{{route('resumes.index')}}">View Resumes</a></p>
                       <p class="mt-3"><a class="btn btn-md btn-primary" href="{{route('resumes.create')}}">New Resume</a></p>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
