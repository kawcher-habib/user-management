@extends('layouts.layout')

@section('content')
<div class="row mt-5">
    <div class="col-4"></div>
    <div class="col-4 border">
        <h5 class="text-center text-uppercase mt-3">Sign Up</h5>
        <form action="{{route('user.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name='name' class="form-control" id="exampleInputName">
                @error('name')
                <span class="text-danger mt-2 mb-2">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                <span class="text-danger mt-2 mb-2">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleInputNumber">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                @error('email')
                <span class="text-danger mt-2 mb-2">{{$message}}</span>
                @enderror
            </div>
           
        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
            <div class="mb-3">
                have an account
            <a href="{{route('signinform')}}">Sign In</a>
            </div>
            
        </form>
    </div>
    <div class="col-4"></div>

</div>


@endsection