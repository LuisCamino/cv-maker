@extends('layouts.app')

@section('content')
<link href="{{ asset('css/resume.css') }}" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>{{ $resume->name }} resume</title>
  <link rel="icon" href="./img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div>
      <img style="width: 120px;" src="{{ $resume->picture }}">
      <div class="mt-2">
      <h4>{{ $resume->title }} </h4>
      </div>
    </div>
    <h1 class="h1 mt-3">{{ $resume->name }}</h1>
    <hr class="hr-name">
    <section>
      <p>{{ $resume->about }}</p>   
    </section>
  </header>
  <main>
    
    <section>
      @if(isset($resume->skills))
      <div class='skills'>
        <div class='column'>
         <h3 class="h3-skills">SKILLS</h3>
         <ol class="ol">
          @foreach(explode(',',$skill) as $row)
          <li>{{ $row }}</li>
          @endforeach
          </ol>
        </div>
        @endif

        <div class='column'>
         <h3>Education</h3>
      <article>
        <div class="descrition">
           <dl>
          @foreach(explode(',',$edu) as $row)
          <dd>{{ $row }}</dd>
          @endforeach
          </dl>
      </article>
        
 
    </section>
    <section>

     @if(isset($resume->experience))
       <div class='skills'>
        <div class='column'>
         <h3>EXPERIENCE</h3>
          <ul>
          @foreach(explode(',',$exp) as $col)
          <li>{{ $col }}</li>
          @endforeach
          </ul>
        </div>

        @endif

        <div class='column'>
         <h3>CONTACT</h3>
      <article>
        <div class="descrition">
           <dl>
          @foreach(explode(',',$con) as $row)
          <dd>{{ $row }}</dd>
          @endforeach
          </dl>
          {{ $resume->email }} <br>
          {{ $resume->website }}
      </article>
        
    </section>
        <div class="row justify-content-left mt-3"><a class="ml-4 mt-3" href="{{route('resumes.index')}}"><img src="https://i.postimg.cc/DZ3rC19N/back-button.png"style="width:30px;height:30px;"></a></div>

  </main>

</body>
</html>
