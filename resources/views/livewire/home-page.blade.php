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
                    @foreach ($skills as $item)
                    <div class="px-5 text-center">
                        <a href="#" class="text-decoration-none">
                            <span class="d-block mb-3">
                                <img 
                                    src="{{ asset('storage/' . $item->image) }}" 
                                    alt="{{ $item->title }} Skill"
                                    class="img-fluid"
                                    style="width:60px; height:60px; object-fit: contain;"
                                >
                            </span>
                            <div class="desc">
                                <h3 class="h6 text-uppercase fw-bold text-white opacity-75">{{ $item->title }}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </marquee>
        </div>
</section>
    {{-- End skills Section  --}}

    {{-- Projects Section --}}

    <section class="ftco-section bg-black" id="projects-section">
        <div class="container">

            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-10 heading-section text-center ftco-animate">
                        <h2 class="mb-4 text-white">Projects</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-start rounded-2xl">

                @foreach ($project as $items)
                    
                <!-- Project Card -->
                <div class="col-md-6 col-lg-4 mb-4 ftco-animate">
                    <div class="card bg-dark border-0 h-100 shadow">

                        <!-- Image -->
                        <<img src="{{ asset('storage/' . $items->image) }}"
                        class="card-img-top"
                        alt="Project Image"
                        style="height: 200px; object-fit: cover;">


                        <!-- Content -->
                        <div class="card-body">
                            <h5 class="card-title text-white fw-bold text-center">
                                {{ $items->title }}
                            </h5>
                            <p class="card-text text-secondary text-center">
                                {{ \Illuminate\Support\Str::words($items->description, 20, '...') }}
                            </p>

                        </div>

                        <!-- Button -->
                        <div class="card-footer bg-dark border-0 text-center pb-4">
                            <a href="{{ $items->link }}"
                            target="_blank"
                            class="btn btn-outline-warning btn-sm px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                <i class="fa-brands fa-github fs-5"></i> 
                                <span class="pl-1">View Project</span>
                            </a>
                        </div>


                    </div>
                </div>
                @endforeach

            </div>
        </div>
</section>


    {{-- End Projects Section --}}
    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our Blog</h2>
            </div>
            </div>

            <div class="row d-flex">
            @foreach ($blogs as $items)
                <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{ route('blogs', $items->id) }}" class="block-20"
                    style="background-image: url('{{ asset('storage/' . $items->image) }}');">
                    </a>

                    <div class="text mt-3 float-right d-block">
                    <div class="d-flex align-items-center mb-3 meta">
                        <p class="mb-0">
                        <span class="mr-2">{{ $items->created_at->format('M d, Y') }}</span> <br>
                        <a href="#" class="mr-2b font-italic">{{ $items->author }}</a>
                        </p>
                    </div>
                    <h3 class="heading">
                        <a href="{{ route('blogs', $items->id) }}">{{ $items->title }}</a>
                    </h3>
                    <p>{!! \Illuminate\Support\Str::words($items->description, 20, '...') !!}</p>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
</section>

    {{-- End Blogs Section --}}

   {{-- Contact Us Page --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Me</h2>
          </div>
        </div>

        <div class="contact-info mb-5">
    <div class="d-flex justify-content-between flex-nowrap">
        @foreach ($contacts as $item)
            <div class="ftco-animate flex-fill mx-2 mb-3" style="max-width: 180px;">
                <div class="box p-3 text-center h-100 d-flex flex-column">
                    <span class="icon d-flex align-items-center justify-content-center" style="font-size: 28px;">
                        {!! $item->icon !!}
                    </span>

                    <h6 class="mb-2 mt-2">{{ $item->title }}</h6>

                     <p class="mb-0 small" style="font-size: 12px; line-height: 1.2;">
                        <a href="{{ $item->link }}" target="_blank" class="text-decoration-none">
                            {{ $item->description }}
                        </a>
                     </p>

                </div>
            </div>
        @endforeach
    </div>
</div>



        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form wire:submit.prevent="submit" class="bg-light p-4 p-md-5 contact-form">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-group">
                <input wire:model.defer="name" type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name">
              @error('name')
                  <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
              <div class="form-group">
                <input wire:model.defer="email" type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email">
            @error('email')
                  <p class="invalid-feedback">{{$message}}</p>
              @enderror  
            </div>
              <div class="form-group">
                <input wire:model.defer="subject" type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
            </div>
              <div class="form-group">
                <textarea wire:model.defer="message" name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
            @foreach ($contactimage as $item )

          	 <div class="img" style="background-image: url({{ asset('storage/' . $item->image) }});"></div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    {{-- End Contact Us Page --}}

</main>
