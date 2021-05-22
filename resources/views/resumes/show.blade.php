@extends('layouts.app')

@section('content')
<link href="{{ asset('css/resume.css') }}" rel="stylesheet" type="text/css">

<div class="container">
     <div class="row" id="header">
          <div>
               <img style="width: 120px;" src=" {{ $resume->picture }}">
          </div>
          <div class="ml-4">
              
               
               <div>
                    <h1>{{ $resume->name }}</h1><hr>
               </div>

                <div>
                    <h4>{{ $resume->title }}</h4>
               </div>
               
               <div class="d-inline-flex justify-content-end">
                    <div class="font-weight-bold">
                         <a href="mailto:{{ $resume->email }}">{{ $resume->email }}</a>
                    </div>

                    @if(isset($resume->email) && isset($resume->website))
                     <div class="ml-3"> | </div>
                     @endif
                     
                    <div class="font-weight-bold ml-3">
                         <a href="{{ $resume->website }}">{{ $resume->website }}</a>
                    </div>
               </div>     
          </div>
          @if (isset($resume->about))
               <div class="ml-5">
               
               </div>
          @endif
     </div>
     @if (isset($resume->about))
     <div class="mt-3 w-50">
          <p class="font-weight-bold">{{ $resume->about }}</p>
     </div>
     
     @endif
</div>
@endsection
