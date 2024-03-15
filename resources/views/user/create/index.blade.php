@extends('layouts.layout')

@section('content')
<div class="row mt-3">
    <div class="col-4"></div>
    <div class="col-4">
        <form>
        <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone</label>
                <input type="number" class="form-control" id="exampleInputNumber">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-4"></div>

</div>


@endsection