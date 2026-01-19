<main>

  <!-- HERO SECTION -->
  <section class="hero-wrap js-fullheight"
           style="background-image: url('{{ asset('storage/' . $blog->image) }}');"
           data-stellar-background-ratio="0.5">
    <div class="overlay"></div>

    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
          {{-- <h1 class="mb-3 bread">{{ $blog->title }}</h1> --}}

          <p class="breadcrumbs">
            <span class="mr-2">
              <a href="{{ route('index') }}">
                Home <i class="ion-ios-arrow-forward"></i>
              </a>
            </span>
            <span class="mr-2">
              <a href="{{ route('blogs', $blog->id) }}">
                Blog <i class="ion-ios-arrow-forward"></i>
              </a>
            </span>
            <span>
              Blog Single <i class="ion-ios-arrow-forward"></i>
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG CONTENT -->
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="ftco-animate">
          <h2 class="mb-3">{{ $blog->title }}</h2>

          <p class="text-muted mb-4 text-amber-500" style="font-style: italic;">
            {{ $blog->created_at->format('M d, Y') }}
            · by <span>{{ $blog->author }}</span>
          </p>

          <div class="ftco-animate">
            {!! $blog->description !!}
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
