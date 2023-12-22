<div id="price-table">
    <div class="block py-5">
        <h3 class="h3-title text-center">
            MegaCM House Cleaning Price List
        </h3>
        <div class="pricing-detail-table">
            <div class="tab-content">
                <table border="1">
                    <tbody>
                    <tr>
                        <th>Pricing</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>
                    <tr>
                        <td>1 Bedroom</td>
                        <td>$125</td>
                        <td>$208</td>
                        <td>$308</td>
                    </tr>
                    <tr>
                        <td>2 Bedroom</td>
                        <td>$145</td>
                        <td>$248</td>
                        <td>$398</td>
                    </tr>
                    <tr>
                        <td>3 Bedroom</td>
                        <td>$180</td>
                        <td>$298</td>
                        <td>$498</td>
                    </tr>
                    <tr>
                        <td>4 Bedroom</td>
                        <td>$220</td>
                        <td>$358</td>
                        <td>$598</td>
                    </tr>
                    <tr>
                        <td>5+ Bedroom</td>
                        <td>$260</td>
                        <td>$398</td>
                        <td>$698</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="block py-5">
        <h3 class="h3-title text-center">
            Your Cleaning Service Includes
        </h3>
        <div class="pricing-detail-table">
            <div class="tab-content">
                <table border="1">
                    <tbody>
                    <tr>
                        <th>Service</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>
                    @foreach(\App\Facades\MegaCM::additionServices() as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>
                                {!! $service['general_cleaning'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['deep_clean'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['move_in_out'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th>Wet Areas</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>

                    @foreach(\App\Facades\MegaCM::additionServices_WetArea() as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>
                                {!! $service['general_cleaning'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['deep_clean'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['move_in_out'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <th>Kitchen</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>

                    @foreach(\App\Facades\MegaCM::additionServices_kitchen() as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>
                                {!! $service['general_cleaning'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['deep_clean'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['move_in_out'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <th>Bathrooms</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>

                    @foreach(\App\Facades\MegaCM::additionServices_bathrooms() as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>
                                {!! $service['general_cleaning'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['deep_clean'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['move_in_out'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <th>Living Areas</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>

                    @foreach(\App\Facades\MegaCM::additionServices_livingAreas() as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>
                                {!! $service['general_cleaning'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['deep_clean'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                            <td>
                                {!! $service['move_in_out'] == true
                                        ? '<i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>'
                                        :'<i class="fl-list-item-icon fas fa-times" aria-hidden="true"></i>' !!}
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="block py-5">
        <h3 class="h3-title text-center">
            Our Additional Services
        </h3>
        <div class="pricing-detail-table">
            <div class="tab-content">
                <table>
                    <tbody>
                    <tr>
                        <th>Pricing</th>
                        <th>General Cleaning</th>
                        <th>Deep Clean</th>
                        <th>Move In/Out</th>
                    </tr>
                    <tr>
                        <td>Clean Refrigerator</td>
                        <td>$53.90</td>
                        <td>$53.90</td>
                        <td>$53.90</td>
                    </tr>
                    <tr>
                        <td>Oven Cleaning</td>
                        <td>$100</td>
                        <td>$100</td>
                        <td>Included</td>
                    </tr>
                    <tr>
                        <td>Small Balcony Cleaning</td>
                        <td>$35</td>
                        <td>$35</td>
                        <td>$35</td>
                    </tr>
                    <tr>
                        <td>Large Balcony Cleaning</td>
                        <td>$75</td>
                        <td>$75</td>
                        <td>$75</td>
                    </tr>
                    <tr>
                        <td>Interior Window Cleaning</td>
                        <td>$64.90</td>
                        <td>$64.90</td>
                        <td>Included</td>
                    </tr>
                    <tr>
                        <td>Interior Window Cleaning (4 Beds+)</td>
                        <td>$108.90</td>
                        <td>$108.90</td>
                        <td>Included</td>
                    </tr>
                    <tr>
                        <td>Carpet Cleaning</td>
                        <td>$110 per room<br>
                            (2 room minimum)</td>
                        <td>$110 per room<br>
                            (2 room minimum)</td>
                        <td>$110 per room<br>
                            (2 room minimum)</td>
                    </tr>
                    <tr>
                        <td>Additional Full Bathrooms (ea)</td>
                        <td>$50</td>
                        <td>$50</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td>Additional Half Bathrooms (ea)</td>
                        <td>$25</td>
                        <td>$25</td>
                        <td>$25</td>
                    </tr>
                    <tr>
                        <td>Exterior Window Cleaning</td>
                        <td>$110</td>
                        <td>$110</td>
                        <td>$110</td>
                    </tr>
                    <tr>
                        <td>Inside Cupboards</td>
                        <td>$55 (must be empty)</td>
                        <td>$55 (must be empty)</td>
                        <td>Included</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                        <td class="link"><a href="{{ route("home.order.book-now") }}">BOOK NOW</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="block py-5">
        <h3 class="h3-title text-center">
            Office Cleaning Prices
        </h3>
        <div class="pricing-detail-table">
            <div class="tab-content">
                <table>
                    <tbody>
                    <tr>
                        <th>Service</th>
                        <th>Pricing</th>
                    </tr>
                    <tr>
                        <td>Office Cleaning</td>
                        <td>$55 Per hour per cleaner inclusive of GST</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a>BOOK NOW</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
