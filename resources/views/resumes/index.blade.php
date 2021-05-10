@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('alert'))

    <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show" role="alert">
        {{ session('alert')['message'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <h3 class="py-2">Actualmente hay {{$resumes->count()}} 'resumes' en la aplicación</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col"></th>
            </tr>
        </thead>   
        <tbody>
            @foreach($resumes as $resume)
            <tr> 
                <td>
                    <a href="{{ route('resumes.show', $resume->id) }}">{{ $resume->title }}</a>
                </td>
                <td>
                    <div class="d-flex justify-content-end">
                        <div class="mr-2">
                            <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                        <div>
                            <a href="{{ route('resumes.destroy', $resume->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                       
                    </div>
                   
                </td>
            </tr>
            @endforeach
        </tbody> 
    </table>
</div>
@endsection
