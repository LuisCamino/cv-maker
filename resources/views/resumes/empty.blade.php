@extends('layouts.app')

@section('content')
<link href="{{ asset('css/empty.css') }}" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>empty resume</title>
  <link rel="icon" href="./img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head> 

<body>
  <header>
    <div>
    <h3 class="h3 p-3 mt-3">Empty resume</h3>
    <div class="row justify-content-center"><img src="/storage/pictures/advertencia.png"style="width:150px;height:150px;"></a></div>
   
    </div>
    </header>

     <div class="d-flex justify-content-center">
    <p class="lead">we need you to provide more details about you,
     in order to show you a good resume.
      <br><a href="{{route('resumes.index')}}"><u>resume list</u></a>
      <br><a href="{{ route('resumes.edit', $resume->id) }}"><u>edit this resume</u></a>
    </p>
    </div>
    
    

</body>
</html>
