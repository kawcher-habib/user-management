@extends('layouts.layout')

@section('content')
<div class="row mt-3">
    <div class="col-4"></div>
    <div class="col-4">
        <form action="{{route('edit',['id'=>$user->id])}}" method="post">
            @csrf
        <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name='name' value="{{$user->name}}" class="form-control" id="exampleInputName">
                @error('name')
                    <span class="text-danger mt-2 mb-2">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                    <span class="text-danger mt-2 mb-2">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone</label>
                <input type="number" name="phone" value="{{$user->phone}}" class="form-control" id="exampleInputNumber">
                @error('phone')
                    <span class="text-danger mt-2 mb-2">{{$message}}</span>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-4"></div>

</div>


@endsection