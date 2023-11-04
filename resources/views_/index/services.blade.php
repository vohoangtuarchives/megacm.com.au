@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
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
        <div class="container">
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
        <div class="container">
            <h3 class="h3-title text-center">
                <span>Take Time Off and Leave the Cleaning to Us 1</span>
            </h3>
            <div class="row">
                <div class="col-lg-5 order-1">
                    <div class="__image d-lg-flex justify-content-end align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>
                <div class="col-lg-7 order-0">
                    {{ fake()->realText(1200) }}
                </div>

            </div>
            <div class="text-center my-3">
                <a href="book-now" target="_self" class="btn btn-success btn-book-now">
                    <span class="fl-button-text">BOOK NOW</span>
                </a>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>Take Time Off and Leave the Cleaning to Us 2</span>
            </h3>
            <div class="row">
                <div class="col-lg-5">
                    <div class="__image d-lg-flex justify-content-end align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>
                <div class="col-lg-7">
                    {{ fake()->realText(1200) }}
                </div>
            </div>
        </div>
    </div>
    @include("index.components.faqs")
@endsection