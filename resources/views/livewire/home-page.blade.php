<main>
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">

            @if ($homepage->isNotEmpty())
                @foreach ($homepage as $item)
                    <div class="slider-item">
                        <div class="overlay"></div>

                        <div class="container">
                            <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                                 data-scrollax-parent="true">

                                <div class="one-third js-fullheight order-md-last img"
                                    style="background-image: url('{{ asset('storage/'. $item->image) }}');">
                                    <div class="overlay"></div>
                                </div>

                                <div class="one-forth d-flex align-items-center ftco-animate"
                                     data-scrollax="properties: { translateY: '70%' }">
                                    <div class="text">
                                        <span class="subheading">{{ $item->greetings }}</span>

                                        <h1 class="mb-4 mt-3">
                                            {{ $item->short_discription }}
                                        </h1>

                                        <h2 class="mb-4">
                                            {{ $item->discription }}
                                        </h2>

                                        <p>
                                            <a href="#" class="btn btn-primary py-3 px-4">Hire me</a>
                                            <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </section>

    {{-- About Us Section --}}

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
                <div class="row d-flex">

                    <div class="col-md-6 col-lg-5 d-flex">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url('{{ asset('storage/'.$item->image) }}');">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4">About Me</h2>

                                @forelse ($about as $item)
                                    <p>{!! $item->description !!}</p>
                                @empty
                                    <p>No about information available.</p>
                                @endforelse

                            </div>
                        </div>

                        <div class="counter-wrap ftco-animate d-flex mt-md-3">
                            <div class="text">
                                <p>
                                    <a href="#" class="btn btn-primary py-3 px-3">
                                        Download CV
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
</section> 
    {{-- End About Us Section --}}

<!-- Resume Section -->
   <section id="resume-section" class="ftco-section">
    <div class="container">

        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h2 class="mb-4">Resume</h2>
            </div>
        </div>

        <div class="row">

            <!-- Left Column -->
            <div class="col-md-6">

                <h3 class="resume-title ftco-animate">Education</h3>

                @forelse ($education as $item)
                    <div class="resume-item ftco-animate">
                        <h4>{{ $item->degree_name }}</h4>
                        <h5>{{ $item->completion_year }}</h5>
                        <p><em>{{ $item->institute }}</em></p>
                        <p>{!! $item->short_description !!}</p>
                    </div>
                @empty
                    <div class="resume-item ftco-animate">
                        <h4>No Education Information</h4>
                        <p>No education details available.</p>
                    </div>
                @endforelse

                
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <h3 class="resume-title ftco-animate">Professional Experience</h3>
                @forelse ($experience as $item)
                <div class="resume-item ftco-animate">
                    <h4>{{ $item->role_title }}</h4>
                    <h5>{{ $item->duration }}</h5>
                    <p><em>{{ $item->company_name }}</em></p>
                    <ul>
                        <li>{!! $item->description !!}</li>
                    </ul>
                </div>
                @empty
                    <div class="resume-item ftco-animate">
                        <h4>No Experience Information</h4>
                        <p>No experience details available.</p>
                    </div>
                @endforelse

            </div>

        </div>
    </div>
</section>

    <!-- /Resume Section -->

    <!-- Services Section -->
   <section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Services</h2>
            </div>
        </div>

        <div class="row">
            @forelse ($service as $item)
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            {!! $item->icons !!}
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">{{ $item->title }}</h3>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h4>No Service Information</h4>
                    <p>No service details available.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

    <!-- /Services Section -->

    {{-- skills Section  --}}
    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4 text-white">Skills</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <marquee behavior="scroll" direction="left" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="d-flex align-items-center">

                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3 text-white" style="font-size: 45px;">
                                <i class="fa fa-guitar"></i> 
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">Guitar</h3>
                            </div>
                        </a>
                    </div>

                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3" style="font-size: 45px;">
                                <i class="fab fa-html5 text-danger"></i>
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">HTML</h3>
                            </div>
                        </a>
                    </div>

                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3" style="font-size: 45px;">
                                <i class="fas fa-leaf text-success"></i>
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">Mongo DB</h3>
                            </div>
                        </a>
                    </div>

                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3 text-light" style="font-size: 45px;">
                                <i class="fab fa-node-js"></i>
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">Node JS</h3>
                            </div>
                        </a>
                    </div>

                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3 text-info" style="font-size: 45px;">
                                <i class="fab fa-react"></i>
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">React JS</h3>
                            </div>
                        </a>
                    </div>

                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3 text-primary" style="font-size: 45px;">
                                <i class="fab fa-css3"></i>
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">Tailwind CSS</h3>
                            </div>
                        </a>
                    </div>

                </div>
            </marquee>
        </div>
</section>
    {{-- End skills Section  --}}
</main>
