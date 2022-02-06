@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Guitars Home</h1>
    <p>This is Guitars home page</p>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        @if (count($guitars) > 0)
        @foreach ($guitars as $guitar)
        <div>
            <h3>
                <a href="{{ route('guitars.show', ['guitar'=> $guitar['id']])}}">{{$guitar['name']}}</a>
            </h3>
            <ul>
                <li>
                    Brand : {{$guitar['brand']}}
                </li>
                <li>
                    Year Made : {{$guitar['year_made']}}
                </li>
            </ul>

        </div>

        @endforeach
        @else
        <h2>This is no guitars to display</h2>
        @endif

        <div>
            User input : {{$userInput}}
        </div>

    </div>


</div>
@endsection