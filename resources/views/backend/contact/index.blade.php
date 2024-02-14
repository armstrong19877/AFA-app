@extends('backend.layout.app')
    @section('title', 'Contact me')
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
            <div class="table-responsive bg-success">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->c_name}}</td>
                    <td>{{$item->c_email}}</td>
                    <td>{{$item->c_subject}}</td>
                    <td>{{$item->c_message}}</td>
                    <td>
                        <form action="{{url('admin/contacts/'.$item->id.'/delete')}}" method="post">
                            @csrf
                            @method('delete')
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