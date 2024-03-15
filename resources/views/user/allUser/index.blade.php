@extends('layouts.layout')

@section('content')

<div class="row mt-2 ">
    <div class="col-4">
        <a href="{{route('getAddForm')}}" class="btn btn-secondary">Add New User</a>
    </div>
    <div class="col-6"></div>
    <div class="col-2"></div>
    <!-- Table Area -->
    <div class="row mt-3">
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
                    <li class="list-group-item"><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                    <li class="list-group-item"><a href="#"><i class="fa fa-trash fa-fw"></i> Delete</a></li>
                    <li class="list-group-item"><a href="{{route('getUser',['id'=>$data->id])}}"><i class="fa fa-eye fa-fw"></i> view</a></li>
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