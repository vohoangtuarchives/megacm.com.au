@extends("index.layouts.app")
@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Your End Of Lease Cleaning Checklist
                    </span>
            </h3>
            <div>
                @include("index.components.checklist-tabs")
            </div>
        </div>
    </div>

    <div class="block py-10">
        <div class="container mw-980">
            <div id="price-table">
                <div class="content mb-5">
                    <h3 class="text-center fs-28 fw-bold mt-4 mb-5">
                        How Much Does Our End of Lease Clean Cost?
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
                                    <td>1 Bedroom, 1 Bathroom</td>
                                    <td>$390</td>
                                </tr>
                                <tr>
                                    <td>2 Bedrooms, 1 Bathroom</td>
                                    <td>$450</td>
                                </tr>
                                <tr>
                                    <td>3 Bedrooms, 2 Bathrooms</td>
                                    <td>$575</td>
                                </tr>
                                <tr>
                                    <td>4 Bedrooms, 2 Bathrooms</td>
                                    <td>$685</td>
                                </tr>
                                <tr>
                                    <td>5 Bedrooms, 2 Bathrooms</td>
                                    <td>$925</td>
                                </tr>
                                <tr>
                                    <td>6 Bedrooms, 2 Bathrooms</td>
                                    <td>$1040</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="link"><a href="book-now">BOOK NOW</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="content mb-5">
                    <div class="pricing-detail-table">
                        <div class="tab-content">
                            <table class="prtable_multibox ">
                                <tbody>
                                <tr>
                                    <th class="first-col-top">Service</th>
                                    <th>Pricing</th>
                                    <th class="last-col-top">Move In/Out</th>
                                </tr>
                                <tr>
                                    <td>Clean Refrigerator</td>
                                    <td>Included</td>

                                    <td>Included</td>
                                </tr>
                                <tr>
                                    <td>Oven Cleaning</td>
                                    <td>Included</td>

                                    <td>Included</td>
                                </tr>
                                <tr>
                                    <td>Small Balcony Cleaning</td>
                                    <td>$35</td>

                                    <td>Per balcony
                                    </td>
                                </tr>
                                <tr>
                                    <td>Large Balcony Cleaning</td>
                                    <td>$75</td>

                                    <td>Per balcony
                                    </td>
                                </tr>
                                <tr>
                                    <td>Interior Window Cleaning</td>
                                    <td>Included</td>

                                    <td>Included</td>
                                </tr>
                                <tr>
                                    <td>Interior Window Cleaning (4 Beds+)</td>
                                    <td>Included</td>

                                    <td>Included</td>
                                </tr>
                                <tr>
                                    <td>Carpet Steam Cleaning</td>
                                    <td>$110 Per Room
                                    </td>
                                    <td>Per Room
                                    </td>

                                </tr>
                                <tr>
                                    <td>Additional Full Bathrooms (ea)</td>
                                    <td>$25</td>
                                    <td>Per full bathroom
                                    </td>

                                </tr>
                                <tr>
                                    <td>Additional Half Bathrooms (ea)</td>
                                    <td>$15</td>
                                    <td>Per half bathroom
                                    </td>

                                </tr>
                                <tr>
                                    <td>Exterior Window Cleaning</td>
                                    <td>$99</td>
                                    <td>Standing level only
                                    </td>

                                </tr>
                                <tr>
                                    <td>Fly Screen Cleaning
                                    </td>

                                    <td>$15
                                    </td>
                                    <td>Per fly screen
                                    </td>
                                </tr>
                                <tr>
                                    <td>Full Wall Washing
                                    </td>

                                    <td>$185

                                    </td>
                                    <td>All interior walls

                                    </td>
                                </tr>
                                <tr>
                                    <td>Ceiling Fans
                                    </td>

                                    <td>$15.50

                                    </td>
                                    <td>Per ceiling fan

                                    </td>
                                </tr>
                                <tr class="last-tr-row">
                                    <td class="first-col-bottom"></td>
                                    <td class="link"><a href="book-now">BOOK NOW</a></td>
                                    <td class="link"><a href="book-now">BOOK NOW</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p>*All Prices are inclusive of GST. If your home doesn't match these parameters, please contact us.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block bg-grey py-5">
        <div class="container mw-980">
            <h3 class="h3-title text-center">
                    <span>
                        What Is End of Lease Cleaning?
                    </span>
            </h3>
            <div class="content">
                <p>
                    End of lease cleaning is like giving your rented home a super-duper clean before you move out. It's important because it helps you get back the money you paid as a security deposit when you first rented the place.
                </p>
                <p>
                    uring this cleaning, you have to clean everything really well, from top to bottom. This means you clean the floors, walls, windows, and all the stuff like appliances. The idea is to make the place look just as nice and clean as it did when you first moved in.
                </p>
                <p>
                    The reason it's a big deal is that landlords want the place to be clean and tidy for the next person who rents it. So, by doing a good job with end of lease cleaning, you improve your chances of getting all of your security deposit money back when you move out.
                </p>
                <p>
                    In short, it's about leaving your rented home in great shape and getting your money back when you leave.
                </p>
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