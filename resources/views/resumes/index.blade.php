@extends('layouts.app')

@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<div class="container">
    @if(session('alert'))

    <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show" role="alert">
        {{ session('alert')['message'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <h4 class="h4 mt-3">Currently there are {{$resumes->count()}} 'resumes' on the application</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Resume title</th>
                <th scope="col"></th>
            </tr>
        </thead>   
        <tbody>
            @foreach($resumes as $resume)
            <tr> 
                <td>
                    <a href="{{ route('resumes.show', $resume->id) }} "><u>{{ $resume->title }} </u></a>
                </td>
                <td>
                    <div class="d-flex justify-content-end">
                        <div class="mr-2">
                            <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('resumes.destroy', $resume->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </div>    
                    </div>  
                </td>
            </tr>
            @endforeach
        </tbody> 
    </table>
    <div class="row justify-content-left"><a class="ml-4 mt-3" href="{{route('home')}}"><img src="/storage/pictures/back-button.png"style="width:30px;height:30px;"></a></div>
</div>
@endsection
