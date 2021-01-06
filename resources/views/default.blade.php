@extends($THEME_LAYOUTS.'apps')
@section('content')
    <main>

        <section class="slider-area slider-area3  hero-overly">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s">{{@$page->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {!! html_entity_decode(@$page->content) !!}
    </main>

    @endsection
