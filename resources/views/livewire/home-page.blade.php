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
                         style="background-image: url('{{ asset('storage/'. $item->image) }}');">
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

</main>
