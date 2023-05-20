@extends('welcome')

@section('content')
<div class="hero page-inner overlay" style="background-image: url({{asset('asset/images/hero_bg_1.jpg')}})">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading aos-init aos-animate" data-aos="fade-up">Services</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Services
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature mb-4">
                    <span class="flaticon-house mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        Quality Properties
                    </h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-2 mb-4 d-block-3"></span>
                    <h3 class="text-black mb-3 font-weight-bold">Top Rated Agent</h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature mb-4">
                    <span class="flaticon-building mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        Property for Sale
                    </h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-3 mb-4 d-block-1"></span>
                    <h3 class="text-black mb-3 font-weight-bold">House for Sale</h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>

            <div class="col-6 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-4 mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        Quality Properties
                    </h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature mb-4">
                    <span class="flaticon-building mb-4 d-block-3"></span>
                    <h3 class="text-black mb-3 font-weight-bold">Top Rated Agent</h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature mb-4">
                    <span class="flaticon-house mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        Property for Sale
                    </h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-1 mb-4 d-block-1"></span>
                    <h3 class="text-black mb-3 font-weight-bold">House for Sale</h3>
                    <p class="text-black-50">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
                    </p>
                    <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sec-testimonials">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    Customer Says
                </h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav" aria-label="Carousel Navigation" tabindex="0">
                    <span class="prev" data-controls="prev" aria-controls="tns1" tabindex="-1">Prev</span>

                    <span class="next" data-controls="next" aria-controls="tns1" tabindex="-1">Next</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="tns-outer" id="tns1-ow">
                <div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0" aria-controls="tns1" style="" aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button><button type="button" data-nav="1" aria-controls="tns1" style="" aria-label="Carousel Page 2" class="" tabindex="-1"></button><button type="button" data-nav="2" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 3"></button><button type="button" data-nav="3" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 4"></button></div>
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">13 to 15</span> of 4</div>
                <div id="tns1-mw" class="tns-ovh">
                    <div class="tns-inner" id="tns1-iw">
                        <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-75%, 0px, 0px);">
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">James Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">James Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>

                            <div class="item tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>

                            <div class="item tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>

                            <div class="item tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">James Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned tns-slide-active">
                                <div class="testimonial">
                                    <img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned tns-slide-active">
                                <div class="testimonial">
                                    <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned tns-slide-active">
                                <div class="testimonial">
                                    <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">James Smith</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <div class="testimonial">
                                    <img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                    <div class="rate">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                                    <blockquote>
                                        <p>
                                            “Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.”
                                        </p>
                                    </blockquote>
                                    <p class="text-black-50">Designer, Co-founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection