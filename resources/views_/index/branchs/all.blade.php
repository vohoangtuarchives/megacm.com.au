@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <div class="fl-col fl-node-a82vzu4qfkim" data-node="a82vzu4qfkim">
                <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-rich-text fl-node-5bc93fa811d0e" data-node="5bc93fa811d0e">
                        <div class="fl-module-content fl-node-content">
                            <div class="fl-rich-text">
                                <p style="text-align: center;">We're providing cleaning services throughout most of Sydney. We serve all homes and apartments within a 40 km radius of <a href="https://www.maidforyou.com.au/">Sydney</a> City CBD.<br>
                                    If you aren't sure if your home is covered please <a href="tel:1300138892">call</a> or <a href="mailto:info@maidforyou.com.au">email us.</a></p>
                                <p style="text-align: center;">We have limited service availabilities in far Western Sydney, Sydney's Northern Beaches, Penrith Valley, and suburbs passed Kirrawee in Sydney's South and Preston's in Sydney's South West.</p>
                                <p style="text-align: center;">Unfortunately, we have no availability in the following suburbs. Engadine, Bundeena, Oran Park, Narellan, Leppington, Newport, Avalon Beach, Richmond, and Kurrajong. Please contact us directly for further queries about our service areas.</p>
                                <p style="text-align: center;">
                                </p></div>
                        </div>
                    </div>
                    <div class="fl-module fl-module-photo fl-node-1rkichgq035m" data-node="1rkichgq035m">
                        <div class="fl-module-content fl-node-content">
                            <div class="fl-photo fl-photo-align-center">
                                <div class="fl-photo-content fl-photo-img-png">
                                    <img src="{{ asset("images/location.png") }}" alt="where we serve" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fl-module-content all-branchs my-5">
                <div class="__content">
                    <ul class="sub_min_yellow">
                        @foreach(\App\Facades\MegaCM::locations() as $location)
                            <li class="px-4">
                                <a href="{{ route("home.cleaning.branch", $location->slug) }}" class="d-block text-center link-blog-category">
                                    <span>{{ $location->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
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