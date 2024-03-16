@extends('layouts.layout')

@section('content')

<div class="row mt-5 ">
    <div class="col-4">
        <a href="{{route('user.create')}}" class="btn btn-secondary">Add New User</a>
    </div>
    <div class="col-4"></div>
    <div class="col-4">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <!-- Table Area -->
    <div class="row mt-4">
        <table class="table">
            <thead>
                <tr class="">
                    <th scope="col-1">S.No</th>
                    <th scope="col-3">Name</th>
                    <th scope="col-2">Email</th>
                    <th scope="col-2">Phone</th>
                    <th scope="col-4">Action</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($getAllUser as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>
                        <div class="row">
                        <ul class="list-group list-group-horizontal">
                    <li class="list-group-item"><a href="{{route('user.edit', ['id'=>$data->id])}}"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                    <li class="list-group-item"><a href="{{route('user.destroy', ['id'=>$data->id])}}"><i class="fa fa-trash fa-fw"></i> Delete</a></li>
                    <li class="list-group-item"><a href="{{route('user.show',['id'=>$data->id])}}"><i class="fa fa-eye fa-fw"></i> view</a></li>
                    </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection