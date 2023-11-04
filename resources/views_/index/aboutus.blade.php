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
                <p>A cleaning company built on the foundations of trust and respect is hard to find nowadays. That’s what makes <strong>MEGACM</strong> a rare breed! We’ve invested 110% of ourselves into the business and created a solid family that works together and stays together! Our cleaning teams have proven to be trustworthy, hardworking and true professionals at their job time and time again, which we are happy to reward them with high salaries and many company perks. Of course, that isn’t an ‘excuse’ to charge customers exorbitant rates for our professional cleaning services. <strong>MaidForYou</strong>’s goal is to keep everyone happy - employees, cleaning staff and customers with quality service, transparent dealings and fair pricing.</p>
                <p>With over 50,000+<a href="https://www.megacm.com.au"> domestic cleans completed in the Sydney</a> metropole and five years of sustained growth, we've certainly earned the trust of loyal customers and many new ones, too!</p>
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>
                    What Makes Us Different
                </span>
            </h3>
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