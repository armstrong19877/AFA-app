@extends('backend.layout.app')
    @section("title", "Create Pdf")
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

            <div class="my-5">
            
                <a href="{{route('pdf')}}" class="btn btn-info">Back to Pdf </a>
               
            </div>

            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{route('store_pdf')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:25rem;  height: 3.5rem;" name="fileName" placeholder="File name" />
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="file"class="form-control" style="width:25rem;  height: 3.5rem;" name="pdf"  />
                                </div>
                            </div>
                        </div> 
                        <div class="text-center mt-5 mx-auto">
                            <button type="submit" class="btn btn-primary text-center">Upload pdf</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        @endsection
        
    
