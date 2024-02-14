@extends('backend.layout.app')
    @section('title', 'Personal details')
        @section('content')
            

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
                </div>
            </div>
 
            @include('backend/inc.success_message')
            <div>
                <a href="{{route('create_details')}}" class="btn btn-primary">Create</a>
                <a href="{{route('details')}}" class="btn btn-info">Back</a>
            </div>
            <div class="table-responsive bg-success">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Place of birth</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personal_details as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->pob}}</td>
                    <td>{{$item->passport_no}}</td>
                    <td>
                        <form action="{{url('admin/details/'.$item->id.'/delete')}}" method="post">
                            @csrf
                            @method('delete')
                            <a id=""class="btn btn-primary"href="{{url('admin/details/'.$item->id.'/edit')}}"role="button">Edit</a>
                            <button onClick="confirm('Are you sure you want to delete the item?');" type="submit" id=""class="btn btn-Danger" href="#"role="button">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>     
        </main>       

    @endsection