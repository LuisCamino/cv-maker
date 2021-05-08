@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <h2 class="text-center">
                       Bienvenido a la aplicación {{$user->name}}
                   </h2>
                    <hr>
                  <h4>
                      Links de la app
                  </h4>
                   <ul>
                       <li><a class="btn btn-sm btn-primary" href="{{route('resumes.index')}}">Ver Resumes</a></li>
                       <li class="mt-2"><a class="btn btn-sm btn-success" href="{{route('resumes.create')}}">Crear Resumes</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
