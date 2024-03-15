@extends('layouts.layout')

@section('content')
<div class="row mt-4">

    <div class="col-4"></div>
    <div class="col-4">

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <p class="card-text">{{$user->email}}</p>
                <hp class="card-text">{{$user->phone}}</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>



@endsection