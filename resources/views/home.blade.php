@extends('layouts.default')

@section('pageTitle', 'Homepage')

@section('content')

    <main>

        <div class="container">

            @foreach ($data as $value )
                <div class="movie-card">
                    <h2>{{ $value['title'] }}</h2>    
                    <p>{{ $value['original_title'] }}</p>
                    <p>{{ $value['nationality'] }}</p>
                    <p>{{ $value['date'] }}</p>
                    <p>{{ $value['vote'] }}</p>
                </div>
            @endforeach

        </div>

    </main>

@endsection