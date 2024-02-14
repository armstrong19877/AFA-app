@extends('backend.layout.app')
    @section("title", "Edit details")
        @section('content')
        <div>
                <a href="{{route('details')}}" class="btn btn-info">Back</a>
            </div>
            <div class="container-sm-1 justify-center align-items-center mt-5 m-sm-5">
                <form class="" method="post" action="{{url('admin/details/'.$personal_detail->id.'/update')}}">
                    @csrf
                    @method('put')
                    
                    <div class="container">
                        <div class="row justify-content-around align-items-center text-center mx-auto">
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control " style="width:18rem; height: 3.5rem;" name="name" id=""aria-describedby="helpId" value="{{$personal_detail->name}}" placeholder="{{$personal_detail->name}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="email"class="form-control" style="width:18rem; height: 3.5rem;" name="email" id=""aria-describedby="helpId" value="{{$personal_detail->email}}" placeholder="{{$personal_detail->email}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control " style="width:18rem; height: 3.5rem;" name="dob" id=""aria-describedby="helpId" value="{{$personal_detail->dob}}" placeholder="{{$personal_detail->dob}}"/>
                                </div>
                                <div class="mb-3">
                                    <textarea type="text"class="form-control" style="width:18rem; height: 8rem;" name="address" id=""aria-describedby="helpId" placeholder="{{$personal_detail->address}}"></textarea>
                                </div>
                            </div>
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="marital_status" id=""aria-describedby="helpId" value="{{$personal_detail->marital_status}}" placeholder="{{$personal_detail->marital_status}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="linked_in" id=""aria-describedby="helpId" value="{{$personal_detail->linked_in}}" placeholder="{{$personal_detail->linked_in}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" name="phone" id=""aria-describedby="helpId" value="{{$personal_detail->phone}}" placeholder="{{$personal_detail->phone}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text"class="form-control" style="width:18rem; height: 3.5rem;" value="{{$personal_detail->passport_no}}" name="passport_no" id=""aria-describedby="helpId" placeholder="{{$personal_detail->passport_no}}"/>
                                </div>
                            </div>
                            <div class="col col-xxl-1 col-xl-2 col-lg-4 col-md-6 col-sm-12 ">
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="nationality" id=""aria-describedby="helpId" value="{{$personal_detail->nationality}}" placeholder="{{$personal_detail->nationality}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="gender" id=""aria-describedby="helpId" value="{{$personal_detail->gender}}" placeholder="{{$personal_detail->gender}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <input type="text" style="width:18rem; height: 3.5rem;" class="form-control" name="pob" id=""aria-describedby="helpId" value="{{$personal_detail->pob}}" placeholder="{{$personal_detail->pob}}"/>
                                </div>
                                <div class="mb-3 mt-4">
                                    <textarea type="text" style="width:18rem; height: 7rem;" class="form-control" name="objective" id=""aria-describedby="helpId" placeholder="{{$personal_detail->objective}}"></textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="text-center mt-5 mx-auto">
                            <button type="submit" class="btn btn-primary text-center">Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div> 
        @endsection
        
    
