@extends('backend.layout.app')
    @section("title", "Edit place of work")
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
                <P>Edit place of work.</P>
                <a href="{{route('place_of_work')}}" class="btn btn-info">Back</a>

               
            </div>
            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{url('admin/place_of_work/'.$work->id.'/update')}}">
                    @csrf
                    @method('put')
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="company_name" value="{{$work->company_name}}" id=""aria-describedby="helpId" placeholder="{{$work->company_name}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="email"class="form-control " style="width:18rem; height: 3.5rem;" name="company_email" value="{{$work->company_email}}" id=""aria-describedby="helpId" placeholder="{{$work->company_email}}"/>
                                </div>
                                <div class="mb-3">
                                    <textarea type="text"class="form-control" style="width:18rem; height: 8rem;" name="company_address" id=""aria-describedby="helpId" placeholder="{{$work->company_address}}"></textarea>
                                </div>
                            </div>

                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="company_phone_no" id=""aria-describedby="helpId" value="{{$work->company_phone_no}}" placeholder="{{$work->company_phone_no}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="job_type" id=""aria-describedby="helpId" value="{{$work->job_type}}" placeholder="{{$work->job_type}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <textarea type="text" style="width:18rem; height: 7rem;" class="form-control" name="job_description" id=""aria-describedby="helpId" placeholder="{{$work->job_description}}"></textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="text-center mt-5 mx-auto">
                            <button type="submit" class="btn btn-primary text-center">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        @endsection
        
    
