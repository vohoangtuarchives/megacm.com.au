@extends("index.layouts.app")

@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>SUPERIOR CLEANING SERVICE AT A VERY COMPETITIVE PRICE</span></h3>
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png">
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png">
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-us1.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png">
                </div>
            </div>
            <div class="fl-rich-text">
                At MegaMC, we commit to deliver our promise in making your spaces fresh, shine,
                hassle free - vibe and leaving no corners unturned.  Our team members are thoroughly

                trained in the latest cleaning products, tools, and techniques and take pride in every
                space they clean!
            </div>
        </div>
        <div class="container text-center">
            <div class="row mt-3 mb-2">
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                        *Bonded &amp; Insured
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">*200% Satisfaction Guaranteed</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                    *Environmentally Friendly Cleaning
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-cneter h3-title" style="font-size: 18px;">
                    *Fully Police checked
                    </p>
            </div>


        </div>
    </div>
    <div class="block py-5">
        <div class="container">
            @include("index.pricing.price-detail-table")
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
