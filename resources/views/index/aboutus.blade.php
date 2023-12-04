@extends("index.layouts.app")

@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>
                    Helping You Spend Time Doing The Things You Love
                </span></h3>
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/ellipse_2.png" alt="">
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/ellipse_2_copy_2.png" alt="">
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/v-image-3.png" alt="">
                </div>
            </div>
            <div class="fl-rich-text">
                <p>A cleaning company built on the foundations of trust and respect is hard to find nowadays. That’s
                    what makes <strong>MEGACM</strong> a rare breed! We’ve invested 110% of ourselves into the
                    business and created a solid family that works together and stays together! Our cleaning teams
                    have proven to be trustworthy, hardworking and true professionals at their job time and time
                    again, which we are happy to reward them with high salaries and many company perks. Of course,
                    that isn’t an ‘excuse’ to charge customers exorbitant rates for our professional cleaning
                    services. <strong>MegaCM</strong>’s goal is to keep everyone happy - employees, cleaning staff and customers with quality service, transparent dealings and fair pricing.</p>
                <p>With over 50,000+<a href="https://www.megacm.com.au"> domestic cleans completed in the Sydney</a> metropole and five years of sustained growth, we've certainly earned the trust of loyal customers and many new ones, too!</p>
            </div>
        </div>
    </div>

{{--    @include("index.about.what_make_us_different")--}}

    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>
                    OUR MISSION
                </span>
            </h3>
            <div class="content py-4">
                We are a customer focused cleaning business with a mission to provide our residential and
                commercial customers with superior services by delivering the highest quality cleaning
                standards in a professional and efficient manner.
                We are dedicated to creating a strong and trusting relationships with our customers and strive
                to exceed their expectations through exceptional customer service while still offering
                competitive pricing. We aim to o create a safe, clean and healthy environment that is free from
                germs, bacteria, and other dangerous elements that can cause health issues by using eco-
                friendly and non-toxic cleaning products and techniques designed to ensure the highest
                standards of cleanliness. Our ultimate goal to maintain sustainable industry leading standards
                and business practices and to be respectful to the living environment.
            </div>
        </div>
    </div>

    <div class="block-qc py-5">
        <div class="container">
            <div class="text-center">
                <div class="row">
                    <div class="col fl-node-s89qvj6yfhac">
                        <div class="col-content"><div class="fl-module fl-module-heading fl-node-hyepdqzkl9ut" data-node="hyepdqzkl9ut">
                                <div class="fl-module-content">
                                    <h3 class="h3-title mb-0">
                                        <span class="fl-heading-text">We’re Committed To 200% Customer Satisfaction Each And Every Time</span>
                                    </h3>
                                </div>
                            </div>
                            <p>If you’re not happy with our work, we make it right!</p>
                            <a href="{{ route("home.order.book-now") }}" target="_self" class="btn btn-success btn-book-now">
                                <span class="fl-button-text">BOOK NOW</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection