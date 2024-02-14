 <section class="hero section-padding mt-5" id="gallery">
                <div class="container mt-5 ">
                        <h4 class="text-center bg-danger text-white">Image and Video gallery</h4>
                        <div class="gallery row  pt-5" style="background-color: #e6ede8;">
                            @foreach ($imgs as $img)
                            @if ($img->image_name !== "avatar_one" && $img->image_name !== "avatar_two" && $img->image_name !== "avatar_three")
                            <div class="">
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
                    </div> 
            </section>