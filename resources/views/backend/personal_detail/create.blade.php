@extends('backend.layout.app')
    @section("title", "Create details")
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
                <a href="{{route('details')}}" class="btn btn-info">Back</a>
            </div>
            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{route('store_details')}}">
                    @csrf
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control " style="width:18rem; height: 3.5rem;" name="name" id=""aria-describedby="helpId" placeholder="Name"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="email"class="form-control" style="width:18rem; height: 3.5rem;" name="email" id=""aria-describedby="helpId" placeholder="Email"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control " style="width:18rem; height: 3.5rem;" name="dob" id=""aria-describedby="helpId" placeholder="Date of birth"/>
                                </div>
                                <div class="mb-3">
                                    <textarea type="text"class="form-control" style="width:18rem; height: 8rem;" name="address" id=""aria-describedby="helpId" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="marital_status" id=""aria-describedby="helpId" placeholder="Marital status"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="linked_in" id=""aria-describedby="helpId" placeholder="LinkedIn link"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="phone" id=""aria-describedby="helpId" placeholder="Phone number"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="passport_no" id=""aria-describedby="helpId" placeholder="International passport number"/>
                                </div>
                            </div>
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="nationality" id=""aria-describedby="helpId" placeholder="Nationality"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="gender" id=""aria-describedby="helpId" placeholder="Gender"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="pob" id=""aria-describedby="helpId" placeholder="Place of birth"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <textarea type="text" style="width:18rem; height: 7rem;" class="form-control" name="objective" id=""aria-describedby="helpId" placeholder="Work objective"></textarea>
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
        
    
