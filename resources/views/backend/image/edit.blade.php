@extends('backend.layout.app')
    @section("title", "Edit Image")
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
            
                <a href="{{route('images')}}" class="btn btn-info">Back to images </a>
               
            </div>

            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{url('admin/images/'.$img->id.'/update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">


                            @if($img = Session::get('img'))
                            <div>
                            <strong>{{$img->image_name}}</strong>
                            <img src="/backend/photos/{{$img->image}}">

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                        </div>
                    @endif



                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">City</label>
                                        <select class="form-select form-select-lg" name="image_name"id="" style="width: 25rem; height: 3rem">
                                            <option>Select the name of the image</option>
                                            <option value="site_logo">Site logo</option>
                                            <option value="home_image">Home image</option>
                                            <option value="about_image">About image</option>
                                            <option value="gallery_one">Gallery one</option>
                                            <option value="gallery_two">Gallery two</option>
                                            <option value="gallery_three">Gallery three</option>
                                            <option value="gallery_four">Gallery four</option>
                                            <option value="gallery_five">Gallery five</option>
                                            <option value="gallery_six">Gallery six</option>
                                            <option value="avatar_one">Avatar_one</option>
                                            <option value="avatar_two">Avatar_two</option>
                                            <option value="avatar_three">Avatar_three</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="file"class="form-control" style="width:25rem;  height: 3.5rem;" name="image"  />
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
        
    
