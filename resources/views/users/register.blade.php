 @extends('challenge')

 @section('content')
     <form action="/users" method="POST">
         @csrf

         <h1>Inscription</h1>

         <fieldset>
             <legend><span class="number">1</span>Vos informations</legend>
             <label for="name">Nom:</label>
             <input type="text" id="name" name="name" value="{{ old('name') }}">
             {{-- @errors('name')
             <p>{{ $message }}</p>

             @enderrors --}}

             <label for="mail">Email:</label>
             <input type="email" id="mail" name="email" value="{{ old('email') }}">
             {{-- @errors('email')
             <p>{{ $message }}</p>

             @enderrors --}}

             <label for="password">Mot de pass:</label>
             <input type="password" id="password" name="password">
             {{-- @errors('password')
             <p>{{ $message }}</p>

             @enderrors --}}
         </fieldset>

         <button class="button" type="submit">Inscription</button>

         <p>Vous etes déja inscrit ?
             <a href="/login">Connexion</a>
         </p>
     </form>
 @endsection
