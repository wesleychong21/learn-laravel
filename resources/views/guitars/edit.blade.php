@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        

        <h3>Edit Guitar</h3>
        <form class="form bg-white p-6 border-1" action="{{route('guitars.update',['guitar' => $guitar->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input type="text" class="form-control" placeholder="Name" value="{{$guitar->name}}" id="name" name="name">
                @error('name')
                    <div class="alert alert-danger ">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="brand">Brand</label>
                <input type="text" class="form-control" placeholder="Brand" value="{{$guitar->brand}}"  id="brand" name="brand">
                @error('brand')
                    <div class="alert alert-danger ">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="year_made">Year Made</label>
                <input type="text" class="form-control" placeholder="2000" value="{{$guitar->year_made}}"  id="year_made" name="year_made">
                @error('year_made')
                    <div class="alert alert-danger ">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <button class="border-1" type="submit">Submit</button>
            </div>
        </form>
    </div>


</div>
@endsection