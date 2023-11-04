@extends("index.layouts.app")

@section("content")
    <div class="block py-5">
        <div class="container">
            <div class="main-title text-center">
                <h3 class="h3-title">Cleaning Services {{ $branch->name }}</h3>
            </div>
            <div class="branch-content">
                {!! html_entity_decode($branch->content) !!}
            </div>
            <div class="branch-images row my-4">
                @foreach([
                    'https://www.maidforyou.com.au/wp-content/uploads/2023/01/image-1.png',
                    'https://www.maidforyou.com.au/wp-content/uploads/2023/01/Service-image-3.png',
                    'https://www.maidforyou.com.au/wp-content/uploads/2023/01/Service-image-2.png'
                ] as $image)
                          <div class="col-lg-4 text-center">
                              <img src="{{$image}}" alt="_image">
                          </div>
                @endforeach
            </div>
        </div>

    </div>

    @section("make-us-difference")
        <div class="block py-5">
            <div class="container">
                <div class="main-title text-center">
                    <h3 class="h3-title">What Makes Us Different</h3>
                </div>
                <div class="branch-content">
                    {!! html_entity_decode($branch->content) !!}
                </div>
            </div>

        </div>
    @show

    @section("cleaning-pricing")
        <div class="block py-5">
            <div class="container">
                <div class="main-title text-center">
                    <h3 class="h3-title">{{ $branch->name }} House Cleaning Prices</h3>
                </div>
                <div class="branch-content w-100 mx-auto" id="price-table">
                    <table border="1" class="w-75 mx-auto">
                        <tbody>
                        <tr>
                            <th>Pricing</th>
                            <th>General Cleaning</th>
                            <th>Deep Clean</th>
                            <th>Move In/Out</th>
                        </tr>
                        <tr>
                            <td>1 Bedroom</td>
                            <td>$154</td>
                            <td>$223</td>
                            <td>$390</td>
                        </tr>
                        <tr>
                            <td>2 Bedroom</td>
                            <td>$168</td>
                            <td>$231</td>
                            <td>$450</td>
                        </tr>
                        <tr>
                            <td>3 Bedroom</td>
                            <td>$203</td>
                            <td>$268</td>
                            <td>$550</td>
                        </tr>
                        <tr>
                            <td>4 Bedroom</td>
                            <td>$248</td>
                            <td>$347</td>
                            <td>$660</td>
                        </tr>
                        <tr>
                            <td>5+ Bedroom</td>
                            <td>$269</td>
                            <td>$397</td>
                            <td>$900</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="link"><a href="book-now">BOOK NOW</a></td>
                            <td class="link"><a href="book-now">BOOK NOW</a></td>
                            <td class="link"><a href="book-now">BOOK NOW</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @show

    @section("services")
        <div class="block py-5 bg-grey">
            <div class="container">
                <h3 class="h3-title text-black text-center">
                    {{ $branch->name }} Cleaning Services
                </h3>
                <div class="__content">
                    <ul class="x_blc_service">
                        <li>
                            <a href="https://www.maidforyou.com.au/services/">
                                <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="Houses" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="Houses"></noscript>
                                <p>Houses Cleaning
                                </p></a>
                        </li>
                        <li><a href="https://www.maidforyou.com.au/services/">
                                <img decoding="async"
                                     src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object17.png"
                                     alt="Apartments"
                                     class="entered lazyloaded">

                                <p>Office Cleaning
                                </p></a>
                        </li>
                        <li><a href="https://www.maidforyou.com.au/services/">
                                <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object28.png" alt="Apartments" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object28.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object28.png" alt="Apartments"></noscript>
                                <p>Apartments
                                </p></a>
                        </li>
                        <li><a href="https://www.maidforyou.com.au/services/">
                                <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object29.png" alt="Townhouses" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object29.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object29.png" alt="Townhouses"></noscript>
                                <p>Townhouses
                                </p></a>
                        </li>
                        <li><a href="https://www.maidforyou.com.au/services/">
                                <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object30.png" alt="Estates" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object30.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object30.png" alt="Estates"></noscript>
                                <p>Estates
                                </p></a>
                        </li>
                        <li><a href="https://www.maidforyou.com.au/services/construction-cleaning/">
                                <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object31.png" alt="Recently renovated buildings" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object31.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object31.png" alt="Recently renovated buildings"></noscript>
                                <p>Recently renovated buildings
                                </p></a>
                        </li>
                        <li><a href="https://www.maidforyou.com.au/services/office-cleaning-sydney/">
                                <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object32.png" alt="Small offices" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object32.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object32.png" alt="Small offices"></noscript>
                                <p>Small offices
                                </p></a>
                        </li>
                    </ul>
                    <p class="text-center mw-980">
                        With industry-leading quality controls, our customers rate their teams after having their home cleaned so you can be sure you're receiving a cutting-edge, superior service, every single time.
                    </p>
                    <div class="text-center my-3">
                        <a href="book-now" target="_self" class="btn btn-success btn-book-now">
                            <span class="fl-button-text">BOOK NOW</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    @show

@section("branch-service")
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-black text-center">
                 MEGACM's {{ $branch->name }} Cleaning Checklist
            </h3>
            @include("index.components.checklist-tabs")
        </div>
    </div>
@show
@endsection