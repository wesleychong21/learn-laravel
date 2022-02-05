@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Guitars show</h1>
    <p>This is Guitars show page</p>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


        <h3>
            {{$guitar['name']}}</h3>
        <ul>
            <li>
                Made : {{$guitar['brand']}}
            </li>
        </ul>



    </div>


</div>
@endsection