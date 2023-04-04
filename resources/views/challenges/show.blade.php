 @extends('challenge')

 @section('content')
     <div class="single-challenge-detail">


         <h2> Voici le challenge {{ $challenge->title }}</h2>
         <h3>{{ $challenge->subtitle }}</h3>
         <p>{{ $challenge->content }}</p>


     </div>
 @endsection
