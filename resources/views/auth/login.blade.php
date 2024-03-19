@extends('layouts.layout')

@section('content')
<div class="row mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 border ">
    <form action="{{route('user.singin')}}" method="post">
        @csrf
        <h5 class="text-center text-uppercase mt-5 mb-5">Sign In</h5>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
                <span class="text-danger mt-3 mb-2">{{$message}}</span>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                    <span class="text-danger mt-2 mb-2">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="mb-2"> 
            Don't have an accoutn
            <a href="{{route('user.create')}}">Create an Account</a>
        </div>
       
    </form>
    </div>
    <div class="col-md-4"></div>
</div>

@endsection