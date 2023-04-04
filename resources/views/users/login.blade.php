 @extends('challenge')

 @section('content')
     <form action="/users/authenticate" method="POST">
         @csrf

         <h1>Connexion</h1>

         <fieldset>


             <label for="mail">Email:</label>
             <input type="email" id="mail" name="email" value="{{ old('email') }}">
             {{-- @errors('email')
             <p>{{ $message }}</p>

             @enderrors --}}

             <label for="password">Password:</label>
             <input type="password" id="password" name="password">
             {{-- @errors('password')
             <p>{{ $message }}</p>

             @enderrors --}}
         </fieldset>

         <button class="button" type="submit">Connexion</button>


         <p>Vous n'etes pas encore inscrit ?
             <a href="/register">Inscrivez-vous</a>
         </p>


     </form>
 @endsection
