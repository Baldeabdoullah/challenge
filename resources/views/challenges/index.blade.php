@extends('challenge')

@section('content')
    <div class="session-message">
        @if (session()->has('message'))
            <p>{{ session('message') }}</p>
        @endif
    </div>


    <div class="container">

        <div class="tags-container">
            <h2>Test App</h2>
            <div class="tags">
                <ul>
                    @foreach ($challenges as $challenge)
                        <li>
                            <a href="/challenges?tag={{ $challenge->tags }}">
                                {{ $challenge->tags }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="challenge-section">
            <h2>List des challenges</h2>

            <div class="challenge-container">
                @foreach ($challenges as $challenge)
                    <div class="challenge">
                        <h2> <a href="{{ route('challenges.show', $challenge->id) }}">{{ $challenge->title }}</a>
                        </h2>
                        <h3>{{ $challenge->subtitle }}</h3>

                        <p>{{ $challenge->tags }}</p>
                    </div>
                @endforeach
            </div>


        </div>




    </div>
@endsection
