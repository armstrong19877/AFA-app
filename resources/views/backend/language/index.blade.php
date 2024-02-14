@extends('backend.layout.app')
    @section('title', 'Languages')
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
            <div class="d-flex">
                <a href="{{route('create_languages')}}" class="btn btn-primary">Create languages</a>
                <p>Languages</p> 
            </div>
            <div class="table-responsive bg-success">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>My languages</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($langs as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->my_language}}</td>
                    <td>
                        <form action="{{url('admin/languages/'.$item->id.'/delete')}}" method="post">
                            @csrf
                            @method('delete')
                            <a id=""class="btn btn-primary"href="{{url('admin/languages/'.$item->id.'/edit')}}"role="button">Edit</a>
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