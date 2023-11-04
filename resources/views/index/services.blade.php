@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container mw-1200">
            <h3 class="h3-title text-center">
                    <span>
                        Here's What You Get!
                    </span>
            </h3>
            <div>
                @include("index.components.checklist-tabs")
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container mw-1200">
            <h3 class="h3-title text-center">
                    <span>
                        Our Services
                    </span>
            </h3>
            <div>
                @include("index.components.services")
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container mw-1200">
            <h3 class="h3-title text-center">
                <span>Take Time Off and Leave the Cleaning to Us 1</span>
            </h3>
            <div class="row">
                <div class="col-lg-6 col-12 order-1">
                    <div class="__image d-lg-flex justify-content-center align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-0">
                    <p>
                        Take a break and let us handle the cleaning for you. We understand that life can get busy, and cleaning is often the last thing you want to worry about. That's where we come in. Our professional cleaning service is here to make your life easier and your home cleaner.
                    </p>
                    <p>
                        Our experienced team is skilled at tackling dirt, dust, and messes of all kinds. Whether it's your home, office, or any other space, we've got you covered. We use safe and effective cleaning methods and products to ensure your space is spotless and hygienic.
                    </p>
                    <p>
                        With our cleaning service, you can reclaim your time and enjoy a fresh and tidy environment without lifting a finger. Say goodbye to the stress of cleaning chores and hello to a cleaner, more relaxing space. Leave the cleaning to us, so you can focus on the things you love.
                    </p>
                </div>

            </div>
            <div class="text-center my-3">
                <a href="book-now" target="_self" class="btn btn-success btn-book-now">
                    <span class="fl-button-text">BOOK NOW</span>
                </a>
            </div>
        </div>
    </div>

    @include("index.components.faqs")
@endsection