@extends('layouts.layouts')

@section('mainContent')
    <div>
        <ul>
            @foreach ($movies as $movie)
               <li>{{$movie->title}}</li> 
            @endforeach
        </ul>
    </div>
@endsection