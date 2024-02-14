@extends('backend.layout.app')
    @section("title", "Create references")
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

            <div>
            
                <a href="{{route('references')}}" class="btn btn-info">Back to references </a>
                
            </div>
            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{url('admin/references/'.$ref->id.'/update')}}">
                    @csrf
                    @method('put')
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="ref_name" value="{{$ref->ref_name}}" id=""aria-describedby="helpId" placeholder="{{$ref->ref_name}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="email"class="form-control " style="width:18rem; height: 3.5rem;" name="ref_email" value="{{$ref->ref_email}}" id=""aria-describedby="helpId" placeholder="{{$ref->ref_email}}"/>
                                </div>
                                <div class="mb-3">
                                    <textarea type="text"class="form-control" style="width:18rem; height: 8rem;" name="address" id=""aria-describedby="helpId" placeholder="{{$ref->address}}"></textarea>
                                </div>
                            </div>

                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="ref_no" id=""aria-describedby="helpId" value="{{$ref->ref_no}}" placeholder="{{$ref->ref_no}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="ref_profession" id=""aria-describedby="helpId" value="{{$ref->ref_profession}}" placeholder="{{$ref->ref_profession}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <textarea type="text" disabled style="width:18rem; height: 7rem;" class="form-control"  id=""aria-describedby="helpId" placeholder="Don't take action"></textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="text-center mt-5 mx-auto">
                            <button type="submit" class="btn btn-primary text-center">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        @endsection
        
    
