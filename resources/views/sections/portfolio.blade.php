<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">My Projects</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item -->
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal{{$project->id}}">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src=" {{ Voyager::image($project->icon) }}" alt="" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!--------------------------------------------- Portfolio Modal --------------------------------------------------->
    @foreach ($projects as $project)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModalLabel">{{ $project->name }}</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Images Slider -->
                                {{-- <img class="img-fluid rounded mb-5" src="{{ Voyager::image($project->icon)}}" alt="" /> --}}
                                <div id="myCarousel{{$project->id}}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach (json_decode($project->images, true) as $key=>$image)                                            
                                            <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
                                                <div class="d-flex justify-content-center">
                                                    @if ( $project->category->name == "Mobile")
                                                        <img class="d-block" src="{{ Voyager::image($image)}}" style="width: 242px; height: 500px">
                                                    @endif

                                                    @if  ( $project->category->name == "Web")                                                    
                                                        <img class="d-block w-100" src="{{ Voyager::image($image)}}" style="height: 400px"> 
                                                    @endif
                                                </div>
                                            </div>                                            
                                        @endforeach                                      
                                    </div>
                                    <a class="carousel-control-prev" href="#myCarousel{{$project->id}}" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel{{$project->id}}" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>


                                <!-- Portfolio Modal - Text-->
                                @if ( $project->category->name == "Mobile")
                                    <div style="margin-top: 65px; margin-bottom: 35px">                                                                                
                                        <h6><img src="assets/img/androidapp.png">Android Application</h6>
                                    </div>                                
                                @endif

                                @if ($project->category->name == "Web")
                                <div style="margin-top: 65px; margin-bottom: 35px">                                                                                
                                    <h6><img src="assets/img/webapp.png">Web Application</h6>
                                </div>
                                @endif
                               

                                <div style="text-align: left">
                                    <p class="mb-5">{!! $project->description !!}</p>
                                </div>

                                <button class="btn btn-primary" data-dismiss="modal" style="margin-top: 40px">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

<!-- ------------------------------------------------------------------------------------------------------------- -->
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script>
    $('.carousel').carousel()
</script>

</section>

