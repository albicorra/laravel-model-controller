@extends('layouts.layouts')

@section('mainContent')
    <div>
        <ul>
            @foreach ($movies as $movie)
               <li>
                    <h2 class="title">{{$movie->title}}</h2>
                    <div class="info">Original title: <span>{{$movie->original_title}}</span></div>
                    <div class="info">Nationality: <span>{{$movie->nationality}}</span></div>
                    <div class="info">Date: <span>{{$movie->date}}</span></div>
                    <div class="info">Vote: <span>{{$movie->vote}}</span></div>
                </li> 
            @endforeach
        </ul>
    </div>
@endsection