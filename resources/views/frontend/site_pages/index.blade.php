@extends('../frontend/layout.app')
    @section("title", "Ajayi's portfolio")
        @section('content')

             <!-- HERO -->
            <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro"> 
                <div class="container">
                    <div class="row">
                        @foreach ($imgs as $img)
                        @if ($img->image_name == "home_image")
                        <div class="mx-auto col-lg-5 col-md-5 col-10">
                            <img src="/backend/photos/{{$img->image}}" class="img-fluid" alt="Ben Resume HTML Template">
                        </div>
                        @endif
                        @endforeach
                        <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                                <div class="hero-text">
                                    @include('frontend/inc.success_message')
                                    <h1 class="hero-title">👋 Ajayi, a mechanical engineer</h1>
                                    @foreach ($pers as $per)
                                     @if ($per->email == "adeyemiajayi370@gmail.com")
                                    <a href="#" class="email-link">
                                        {{$per->email}}
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                    </div>
                </div>
            </section>

            <section class="about section-padding my-5" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="mb-4">This is Ajayi Friday Adeyemi's Resume</h3>
                            
                            <p>Ajayi Friday Adeyemi is a skilled tradesperson who specializes in diagnosing, servicing, and repairing cars and <a rel="nofollow" href="/" target="_parent">other motorized</a> vehicles.</p>

                            <p>He has worked with Shelex Fix Auto Limited and Aukcity Auto Diagnosis Company were he was responsible for inspecting, troubleshooting, and maintaining variety of automobiles and their components. He currently works at Deep Auto Nigeria Limited.</p>

                            <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                                @foreach ($pers as $per)
                                @if ($per->email == "adeyemiajayi370@gmail.com")
                                <li><strong>Full Name :</strong> {{$per->name}} </li>

                                <li><strong>Date of Birth:</strong> {{$per->dob}}<a href="{{url('sign_in')}}">.</a></li>

                                <li><strong>Website :</strong> ajayifridayadeyemi.com.ng</li>

                                <li><strong>Email :</strong> {{$per->email}}</li>
                                @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-5 mx-auto col-md-6 col-12">
                            @foreach ($imgs as $img)
                            @if ($img->image_name == "about_image")
                            <img src="/backend/photos/{{$img->image}}" class="about-image img-fluid py-4" alt="Ben's Resume HTML Template">
                            @endif
                            @endforeach
                        </div>

                    </div>

                    <div class="row">
                        <h2 class=" text-center mt-5 pt-5 ">Skills</h2>

                        <div class="row about-third h-50">
                            <div class="col-lg-4 col-md-4 col-12 card text-center">
                            <h3 class="h4 my-4 text-primary">Auto maintenance/servicing</h3>
                            @foreach ($imgs as $img)
                            @if ($img->image_name == "gallery_one")
                            <p><img src="/backend/photos/{{$img->image}}" class="image-fluid w-100 card-img"></p>
                            @endif
                            @endforeach
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 card " >
                            <h3 class="h4 my-4 text-center text-primary">Car repair and suspension</h3>
                            @foreach ($imgs as $img)
                            @if ($img->image_name == "gallery_one")
                            <p><img src="/backend/photos/{{$img->image}}" class="image-fluid w-100 card-img"></p>
                            @endif
                            @endforeach
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 card ">
                            <h3 class="h4 text-center my-4 text-primary">Car body maintenance</h3>
                            @foreach ($imgs as $img)
                            @if ($img->image_name == "gallery_one")
                            <p><img src="/backend/photos/{{$img->image}}" class="image-fluid w-100 card-img"></p>
                            @endif
                            @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section class="about section-padding mt-3" id="gallery">
                <div class="container ">
                        
                        <div class="gallery row border-bottom border-secondary border-2 " style="background-color: #e6ede8;">
                            <h4 class="text-center text-info">Image gallery</h4>
                            @foreach ($imgs as $img)
                            @if ($img->image_name !== "avatar_one" && $img->image_name !== "avatar_two" && $img->image_name !== "avatar_three")
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            <figure class="">
                                <img src="/backend/photos/{{$img->image}}" class="img-fluid"   alt="B"> 
                                <figcaption>Daytona Beach <small>United States</small></figcaption>
                            </figure> 
                            </div>  
                            @endif
                            @endforeach
                                

                            <!--        Copy the figure tags along with the content and paste it above this comment.
                                        Replace the link in the src attribute with the image link.
                                        Also change the content in figcaption and small tags according to the location
                            -->
                        </div>

                        <div class="gallery row " style="background-color: #e6ede8;">
                            <h4 class="text-center text-info">Video gallery</h4>
                            @foreach ($imgs as $img)
                            @if ($img->image_name !== "avatar_one" && $img->image_name !== "avatar_two" && $img->image_name !== "avatar_three")
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            <figure class="">
                                <video controls src="/videos/v_one.mp4" width="320" height="240" class="img-fluid h-75"   alt="B" type="video/mp4"></video> 
                                <figcaption>Daytona Beach <small>United States</small></figcaption>
                            </figure> 
                            </div>  
                            @endif
                            @endforeach
                                

                            <!--        Copy the figure tags along with the content and paste it above this comment.
                                        Replace the link in the src attribute with the image link.
                                        Also change the content in figcaption and small tags according to the location
                            -->
                        </div>
                    </div> 
            </section>

            <!-- TESTIMONIAL -->
            <section class="testimonials section-padding mt-5" id="testimonials">
                <div class="container">
                    <div class="row">

                            <div class="col-12">
                                <h3 class="mb-5 text-center">What People say</h3>

                                <div class="owl-carousel owl-theme" id="testimonials-carousel">
                                    <div class="item">
                                        <div class="testimonials-thumb d-flex">
                                            <div class="testimonials-image">
                                                @foreach ($imgs as $img)
                                                @if ($img->image_name == "avatar_one")
                                                <img src="/backend/photos/{{$img->image}}" class="img-fluid" alt="testimonials image">
                                                @endif
                                                @endforeach
                                            </div>

                                            <div class="testimonials-info">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                                <h6 class="mb-0">Ben</h6>
                                                <span>Art Director</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="testimonials-thumb d-flex">
                                            <div class="testimonials-image">
                                                @foreach ($imgs as $img)
                                                @if ($img->image_name == "avatar_two")
                                                <img src="/backend/photos/{{$img->image}}" class="img-fluid" alt="testimonials image">
                                                @endif
                                                @endforeach
                                            </div>

                                            <div class="testimonials-info">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                                <h6 class="mb-0">Marie</h6>
                                                <span>Marketing Consultant</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="testimonials-thumb d-flex">
                                            <div class="testimonials-image">
                                                @foreach ($imgs as $img)
                                                @if ($img->image_name == "avatar_three")
                                                <img src="/backend/photos/{{$img->image}}" class="img-fluid" alt="testimonials image">
                                                @endif
                                                @endforeach
                                            </div>

                                            <div class="testimonials-info">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                                <h6 class="mb-0">Jen</h6>
                                                <span>Product Manager</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="testimonials-thumb d-flex">
                                            <div class="testimonials-image">
                                                <img src="images/testimonials/testimonial-image04.jpg" class="img-fluid" alt="testimonials image">
                                            </div>

                                            <div class="testimonials-info">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                                <h6 class="mb-0">Wilson</h6>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div>
                </div>
            </section>

            <section class="contact section-padding pt-0" id="contact">
                <div class="container">
                    <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        
                        <form action="{{route('contact_me')}}" method="post" class="contact-form webform"  role="form">
                            @csrf
                            <div class="form-group d-flex flex-column-reverse">
                                <input type="text" class="form-control" name="c_name" id="cf-name" placeholder="Your Name">

                                <label for="c_name" class="webform-label">Full Name</label>
                            </div>

                            <div class="form-group d-flex flex-column-reverse">
                                <input type="email" class="form-control" name="c_email" id="cf-email" placeholder="Your Email">

                                <label for="c_email" class="webform-label">Your Email</label>
                            </div>

                            <div class="form-group d-flex flex-column-reverse">
                                <input type="text" class="form-control" name="c_subject" id="c_subject" placeholder="Your Subject">

                                <label for="c_subject" class="webform-label">Subject</label>
                            </div>

                            <div class="form-group d-flex flex-column-reverse">
                                <textarea class="form-control" rows="5" name="c_message" id="cf-message" placeholder="Your Message"></textarea>

                                <label for="c_message" class="webform-label">Message</label>
                            </div>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
                        </form>
                    </div>

                    <div class="mx-auto col-lg-4 col-md-6 col-12">
                        <h3 class="my-4 pt-4 pt-lg-0">Get in touch</h3>
                        @foreach ($pers as $per)
                        @if ($per->email == "adeyemiajayi370@gmail.com")
                        <p class="mb-1">{{$per->phone}}</p>
                        <p>
                            <a href="#">
                                {{$per->email}}
                            <i class="fas fa-arrow-right custom-icon"></i>
                            </a>
                        </p>
                        @endif
                        @endforeach
                        <ul class="social-links mt-2">
                            <li><a href="https://fb.com/tooplate" rel="noopener" class="fab fa-facebook"></a></li>
                            <li><a href="#" rel="noopener" class="fab fa-twitter"></a></li>
                            <li><a href="#" rel="noopener" class="fab fa-instagram"></a></li>
                            <li><a href="#" rel="noopener" class="fab fa-linkedin"></a></li>
                            <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                        </ul>
                        
                        <p class="copyright-text mt-5 pt-3">Copyright &copy; 2020 Ajayi Friday Adeyemi Resume</p>
                        <p>Design: <a href="#" title="free HTML templates" target="_blank"class="text text-lowercase">P4TITSOLUTIONS@GMAIL.COM</a></p>
                    



        

                      
                    
                    
                    
                    </div>

                    </div>
                </div>
            </section>
@endsection