@extends("index.layouts.app")

@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center"><span>Why Book Your Cleaning Service With MaidForYou?</span></h3>
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
                <p>Bondi is nestled in the&nbsp;<a href="https://www.maidforyou.com.au/house-cleaning-eastern-suburbs-sydney">Eastern Suburbs</a>&nbsp;of Sydney and is world renown for its beaches, food and laid back lifestyle. Bondi is perfect for a spot of surfing, water sports, barbecues or a visit to the local&nbsp;<a href="https://www.bondimarkets.com.au/" target="_blank" rel="noopener">Bondi markets.</a></p>
                <p>We provide the best house cleaning service in&nbsp;<a href="https://www.sydney.com/destinations/sydney/sydney-east/bondi" target="_blank" rel="noopener">Bondi.</a>&nbsp;We understand that it's difficult to find reliable, honest, insured and bonded house cleaners in Bondi. We've provided services to thousands of clients in Bondi and it's surrounding suburbs. Nestled near the middle of the Sydney CBD we know the Bondi locals and know that they're some of the most eco-friendly customers we've come across, that's why in all of our Bondi cleans we're sure to use eco-friendly products that are safe for families and pets. We're so certain of our service that we offer a 200% satisfaction guarantee. Save time and money by&nbsp;<a href="https://www.maidforyou.com.au/book-now/">booking now.</a></p>
                <p>See why your eastern suburb neighbours are booking our Sydney's most well renown cleaning service. We're providing&nbsp;<a href="https://www.maidforyou.com.au/services/regular-cleaning-sydney/">regular</a>,&nbsp;<a href="https://www.maidforyou.com.au/services/end-of-lease-cleaning-sydney/">end of lease</a>&nbsp;and&nbsp;<a href="https://www.maidforyou.com.au/services/deep-cleaning-services-sydney/">spring cleaning</a>&nbsp;services in a street near you.</p>
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container">
            @include("index.pricing.price-detail-table")
        </div>
    </div>
    <div class="block my-5 mw-980" id="home-faq">
        <div class="container">
            <h3 class="h3-title text-center"><span>Frequently Asked Questions</span></h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach(\App\Facades\MegaCM::lastestFAQs() as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="{{$faq->slug}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$faq->slug}}-id" aria-expanded="false" aria-controls="{{$faq->slug}}-id">
                                {{$faq->name}}
                            </button>
                        </h2>
                        <div id="{{$faq->slug}}-id" class="accordion-collapse collapse" aria-labelledby="{{$faq->slug}}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{$faq->content}}
                            </div>
                        </div>
                    </div>
                @endforeach
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
                            <a href="book-now" target="_self" class="btn btn-success btn-book-now">
                                <span class="fl-button-text">BOOK NOW</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection