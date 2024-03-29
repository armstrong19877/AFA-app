@extends('backend.layout.app')
    @section("title", "Create place of work")
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
            
                <a href="{{route('place_of_work')}}" class="btn btn-info">Back</a>
               
            </div>
            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{route('store_place_of_work')}}">
                    @csrf
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="company_name" value="" id=""aria-describedby="helpId" placeholder="Company name"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="email"class="form-control " style="width:18rem; height: 3.5rem;" name="email" value="" id=""aria-describedby="helpId" placeholder="Company email"/>
                                </div>
                                <div class="mb-3">
                                    <textarea type="text"class="form-control" style="width:18rem; height: 8rem;" name="company_address" id=""aria-describedby="helpId" placeholder="Company address"></textarea>
                                </div>
                            </div>

                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="company_phone_no" id=""aria-describedby="helpId" value="" placeholder="Company's phone number"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="job_type" id=""aria-describedby="helpId" value="" placeholder="Job type"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <textarea type="text" style="width:18rem; height: 7rem;" class="form-control" name="job_description" id=""aria-describedby="helpId" placeholder="Job description"></textarea>
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
        
    
