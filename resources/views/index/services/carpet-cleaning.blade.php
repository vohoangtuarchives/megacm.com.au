@extends("index.layouts.app")
@section("content")
<div class="block py-5">
    <div class="container">
        <h3 class="h3-title text-center">
                    <span>
                        Carpet Cleaning in Penrith
                    </span>
        </h3>
        <div class="content">
            At some point in time, you need to turn to a professional carpet care service for an all-round, deep clean of your rugs and carpets. It’s the only real chance you have of extending their use while ensuring that they continue to look their absolute best for years to come! With a wide range of carpet cleaning services that are intended to treat specific types of stains, carpet fibres, and so on, routine professional care is a must, and a real blessing when performed by skilled, experienced, and trusted carpet cleaners!
        </div>
    </div>
</div>
<div class="block py-5">
    <div class="container">
        <h3 class="h3-title text-center">
            <span>Penrith’s Best Carpet Cleaning Service!</span>
        </h3>
        <div class="row">
            <div class="col-md-6 col-12 order-1">
                <div class="__image d-lg-flex justify-content-center align-items-center">
                    <img src="{{ asset("images/8427.jpg") }}"
                         class="img-fluid w-480"
                         alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                </div>
            </div>
            <div class="col-md-6 col-12 order-0">
                @include("index.contents.penrith_best_home_cleaning_service")
            </div>

        </div>
        <div class="text-center my-3">
            <a href="{{ route("home.order.book-now") }}" target="_self" class="btn btn-success btn-book-now">
                <span class="fl-button-text">BOOK NOW</span>
            </a>
        </div>
    </div>
</div>
<div class="block">
    <div class="container">
        <h3 class="h3-title text-center">
            <span>Take Time Off and Leave the Cleaning to Us</span>
        </h3>
        <div class="row">
            <div class="col-md-5 col-12">
                <div class="__image d-lg-flex justify-content-end align-items-center">
                    <img src="{{ asset("images/Nepean-and-fwy-bridge.png") }}"
                         class="img-fluid w-480"
                         alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                </div>
            </div>
            <div class="col-md-7 col-12">
                <p>
                    Our team of highly trained professionals utilizes advanced cleaning techniques, eco-friendly products, and state-of-the-art equipment to deliver exceptional results. Whether you need residential cleaning, office cleaning, carpet cleaning, or specialized services, we tailor our approach to meet your unique needs.
                </p>
                <p>
                    At Penrith's Premier Cleaning Services, we prioritize attention to detail, ensuring every surface and corner is spotless. We take pride in promoting a healthy, hygienic environment for our clients, and our dedication shows in every job we undertake.
                    Experience the convenience and satisfaction of having a clean space with Penrith's Premier Cleaning Services. Let us transform your home or workplace into a shining oasis, leaving you with more time to focus on what matters most. Contact us today for a cleaner, healthier tomorrow.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="block py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h3 class="h3-title">
                    <span>Why You Should Purchase Carpet Cleaning Services</span>
                </h3>
                Regular cleaning practices carried out by homeowners do a fairly good job at keeping carpets and rugs
                looking decent. However, getting rid of bacteria, foul odours, tough stains, dirt, and dust trapped
                within the fibres all require the workings of a skilled and experienced carpet cleaner. With the best
                carpet cleaning service at your disposal, <strong>MegaCM</strong> promises 100% satisfactory
                results and the
                    best value for money!
            </div>
            <div class="col-lg-6">
                <div class="__image d-lg-flex justify-content-center align-items-center">
                    <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                    class="img-fluid w-480"
                    alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="block py-3">
    <div class="container mw-980">
        <h3 class="h3-title text-center">
            <span>
                How Much Does it Cost?
            </span>
        </h3>
        <div class="content mb-5">
            <p class="fs-14 text-center">
                There are many factors that affect the cost of professional carpet cleaning services including the size/area, type of cleaning method, equipment and cleaning solutions required, type of stains to be removed (if any), etc. Keeping the many different requirements in mind, a professional carpet cleaning service can cost anywhere between $80-$200.
            </p>
            <div id="down_ic" class="filter-green">
            </div>


            <div id="price-table">
                <div class="content mb-5">
                    <h3 class="text-center fs-28 fw-bold mt-4 mb-5">
                        Sydney Carpet Cleaning Prices
                    </h3>
                    @include("index.pricing.two_col_room", [
                        'title' => "Carpet Cleaning",
                        'rooms' => 5
                    ])
                </div>
                <div class="content mb-5">
                    <h3 class="text-center fs-28 fw-bold mt-4 mb-5">
                        Additional Carpet Cleaning Service Prices
                    </h3>
                    <div class="pricing-detail-table">
                        <div class="tab-content">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Services</th>
                                    <th>Pricing</th>
                                </tr>

                                <tr>
                                    <td>Staircase</td>
                                    <td>$25</td>
                                </tr>
                                <tr>
                                    <td>Flea Treatment</td>
                                    <td>$99</td>
                                </tr>
                                <tr>
                                    <td>Heavy Duty Stain Removal</td>
                                    <td>$20 per room</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="content mb-5">
                    <h3 class="text-center fs-28 fw-bold mt-4 mb-5">
                        Lounge & Sofa Cleaning Prices
                    </h3>
                    <div class="pricing-detail-table">
                        <div class="tab-content">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Services</th>
                                    <th>Pricing</th>
                                </tr>

                                <tr>
                                    <td>1 Seater Couch</td>
                                    <td>$90</td>
                                </tr>
                                <tr>
                                    <td>2 Seater Couch</td>
                                    <td>$90</td>
                                </tr>
                                <tr>
                                    <td>3 Seater Couch</td>
                                    <td>$130</td>
                                </tr>
                                <tr>
                                    <td>4 Seater Couch</td>
                                    <td>$170</td>
                                </tr>
                                <tr>
                                    <td>5 Seater Couch</td>
                                    <td>$210</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="content mb-5">
                    <h3 class="text-center fs-28 fw-bold mt-4 mb-5">
                        Sydney Mattress Cleaning Prices
                    </h3>
                    <div class="pricing-detail-table">
                        <div class="tab-content">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Services</th>
                                    <th>Pricing</th>
                                </tr>

                                <tr>
                                    <td>Single Mattress</td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>Double Mattress</td>
                                    <td>$180</td>
                                </tr>
                                <tr>
                                    <td>Queen Size Mattress</td>
                                    <td>$210</td>
                                </tr>
                                <tr>
                                    <td>King Mattress</td>
                                    <td>$239</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include("index.components.faqs")

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
