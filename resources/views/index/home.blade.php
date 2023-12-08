@extends("index.layouts.app")

@section("content")
    <div class="block py-5">
        <div class="container">
            <div class="main-title text-center">
                <h3 class="h3-title">
                    <span>
                        Why Us
                    </span>
                </h3>
            </div>
            <div class="_content">
                <div class="row">
                    @foreach([
                        [
                            'path' =>  'https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object12.png',
                            'title' => 'Simple',
                            'content' => 'Set up a regular cleaning schedule or book a one-time service. Manage your bookings online, and reschedule as you need.',
                        ],
                        [
                                'path' =>  'https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object10.png',
                                'title' => 'Highly trusted',
                                'content' => 'Our cleaners are rated by other customers, so you get the best of the best.',
                            ],
                        [
                            'path' =>  'https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object12.png',
                            'title' => 'Convenient',
                            'content' => 'You can relax knowing your cleaning team will arrive on time and leave your home sparkling.',
                        ],



                ] as $item)
                        <div class="col-lg-4">
                            <div class="text-center">
                                <div class="_image mb-3">
                                    <img src="{{ $item['path'] }}" alt="" class="filter-green img-fluid">
                                </div>
                                <h3 class="h4">
                                    <span>{{ $item['title'] }}</span>
                                </h3>
                                <div>
                                    <p>{{ $item['content'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="block py-5 bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    @include("index.contents.what_make_us_different")
                </div>
                <div class="col-md-6 col-12">
                    <img src="{{ asset("images/Sluzby-strojove-cistenie-scaled-e1631043016240-545x418.jpg") }}"
                         class="img-fluid w-480" alt="">
                </div>
            </div>
        </div>
    </div>

   <div class="block py-5 bg-grey">
       <div class="container">
           <h3 class="h3-title text-black text-center">
               Our Services
           </h3>
           <div class="__content">
               <p class="text-center mw-980 mb-4">
                   At MegaCM, we come highly recommended and cover all your house and office cleaning needs, including:
               </p>
               <ul class="x_blc_service flex-wrap">
                   <li>
                       <a href="https://megacm.com.au/services/">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="House" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="House"></noscript>
                           <p>House Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/office-cleaning">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object17.png" alt="Office" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object17.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object17.png" alt="Office"></noscript>
                           <p>Office Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/regular-cleaning">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object18.png" alt="Regular" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object18.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object18.png" alt="Regular"></noscript>
                           <p>Regular Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/end-of-lease-cleaning">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object19.png" alt="End of Lease" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object19.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object19.png" alt="End of Lease"></noscript>
                           <p>End of Lease Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/deep-cleaning-services">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object20.png" alt="Deep" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object20.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object20.png" alt="Deep"></noscript>
                           <p>Deep Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/construction-cleaning/">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object24.png" alt="Construction" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object24.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object24.png" alt="Construction"></noscript>
                           <p>Construction Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/ndis-cleaning/">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object25.png" alt="NDIS" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object25.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object25.png" alt="NDIS"></noscript>
                           <p>NDIS Cleaning
                           </p></a>
                   </li>
                   <li><a href="https://megacm.com.au/services/oven-cleaning/">
                           <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object26.png" alt="Oven" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object26.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object26.png" alt="Oven"></noscript>
                           <p>Oven Cleaning</p></a>
                   </li>
               </ul>

               <div class="text-center my-3">
                   <a href="{{ route("home.order.book-now") }}" target="_self" class="btn btn-success btn-book-now">
                       <span class="fl-button-text">BOOK NOW</span>
                   </a>
               </div>
           </div>
       </div>

   </div>
    <div class="block py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-12 mb-5">
                    <img decoding="async" class="img-fluid w-480" src="https://www.maidforyou.com
                    .au/wp-content/uploads/2022/12/what-you-get.png" alt="MegaCM cleaner mikki wiping down a glass
                    bathroom shower screen" height="610" width="610" data-lazy-srcset="https://www.maidforyou.com
                    .au/wp-content/uploads/2022/12/what-you-get.png 610w, https://www.maidforyou.com
                    .au/wp-content/uploads/2022/12/what-you-get-300x300.png 300w, https://www.maidforyou.com
                    .au/wp-content/uploads/2022/12/what-you-get-150x150.png 150w" data-lazy-sizes="(max-width: 610px)
                     100vw, 610px" data-lazy-src="https://www.maidforyou.com
                     .au/wp-content/uploads/2022/12/what-you-get.png" data-ll-status="loaded" sizes="(max-width: 610px) 100vw, 610px" srcset="https://www.maidforyou.com.au/wp-content/uploads/2022/12/what-you-get.png 610w, https://www.maidforyou.com.au/wp-content/uploads/2022/12/what-you-get-300x300.png 300w, https://www.maidforyou.com.au/wp-content/uploads/2022/12/what-you-get-150x150.png 150w" title="MegaCM Cleaner Mikki">
                </div>
                <div class="col-md-5 col-12">
                    <div class="col-content fl-node-content"><div class="fl-module fl-module-heading fl-node-9g8qt10hcfus" data-node="9g8qt10hcfus">
                            <div class="fl-module-content fl-node-content">
                                <h2 class="fl-heading">
                                    <span class="fl-heading-text">Here's What You Get!</span>
                                </h2>
                            </div>
                        </div>
                        <div class="fl-module fl-module-rich-text fl-node-841a7idyuvok" data-node="841a7idyuvok">
                            <div class="fl-module-content fl-node-content">
                                <div class="fl-rich-text">
                                    <p>MegaCM provides unrivaled quality cleaning services to Houses, Apartments,
                                        Townhouses, Estates, and Small Offices throughout Sydney.</p>
                                </div>
                            </div>
                        </div>
                        <div class="fl-module fl-module-list fl-node-p9g54alv2ufx blue-headings_li" data-node="p9g54alv2ufx">
                            <div class="fl-module-content fl-node-content">
                                <div class="fl-list fl-list-regular" role="list">	<div role="listitem" class="fl-list-item fl-list-item-0">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">Organic, sustainable cleaning products</span></div></div>
                                    </div>
                                    <div role="listitem" class="fl-list-item fl-list-item-1">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">Quick and easy online booking   </span></div></div>
                                    </div>
                                    <div role="listitem" class="fl-list-item fl-list-item-2">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">Outstanding customer service  </span></div></div>
                                    </div>
                                    <div role="listitem" class="fl-list-item fl-list-item-3">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">Super fast response rate</span></div></div>
                                    </div>
                                    <div role="listitem" class="fl-list-item fl-list-item-4">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">A thorough, friendly and experienced cleaning crew   </span></div></div>
                                    </div>
                                    <div role="listitem" class="fl-list-item fl-list-item-5">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">No lock in contracts   </span></div></div>
                                    </div>
                                    <div role="listitem" class="fl-list-item fl-list-item-6">
                                        <div class="fl-list-item-wrapper">
                                            <div class="fl-list-item-heading"><span class="fl-list-item-heading-icon fl-list-item-heading-left"><i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i></span> <span class="fl-list-item-heading-text">Competitive pricing</span></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           </div>
        </div>
    </div>

{{--    @include("index.components.home-price-table")--}}

    <div class="block py-5">
        @include("index.partials.services")
    </div>
    {{--    @include("index.components.home-why-chose-us")--}}
    <div class="block py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-12">
                    <img decoding="async" class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23.png" alt="A service area map of Sydney depicting specific availability in Sydney suburbs" height="484" width="540" data-lazy-srcset="https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23.png 540w, https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23-300x269.png 300w" data-lazy-sizes="(max-width: 540px) 100vw, 540px" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23.png" data-ll-status="loaded" sizes="(max-width: 540px) 100vw, 540px" srcset="https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23.png 540w, https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23-300x269.png 300w" title="Service area map of Sydney"><noscript><img decoding="async" class="fl-photo-img wp-image-9913 size-full" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23.png" alt="A service area map of Sydney depicting specific availability in Sydney suburbs"  height="484" width="540" title="Service area map of Sydney" srcset="https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23.png 540w, https://www.maidforyou.com.au/wp-content/uploads/2022/12/layer_23-300x269.png 300w" sizes="(max-width: 540px) 100vw, 540px" /></noscript>
                </div>
                <div class="col-md-5 col-12">
                    <div class="col-content fl-node-content"><div class="fl-module fl-module-heading fl-node-zuj1vq7p9lmh" data-node="zuj1vq7p9lmh">
                            <div class="fl-module-content fl-node-content">
                                <h2 class="fl-heading">
                                    <span class="fl-heading-text">We're Providing Services to The Entire Sydney Metropole</span>
                                </h2>
                            </div>
                        </div>
                        <div class="fl-module fl-module-rich-text fl-node-od3gi6w2zulb" data-node="od3gi6w2zulb">
                            <div class="fl-module-content fl-node-content">
                                <div class="fl-rich-text">
                                    <p>We're servicing most suburbs in Sydney including:</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <ul class="v-list-location list-unstyled p-0">
                                @foreach(\App\Facades\MegaCM::hotBranch() as $i => $branch)
                                   @break($i == 8)

                                <li>
                                    <a href="{{ route("home.cleaning.branch", ['branch' => $branch->slug]) }}" class="d-flex justify-content-between align-items-center">
                                        <span class="__title">{{$branch->name}}</span>
                                        <span class="__icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="block py-5 bg-grey">--}}
{{--        <div class="container">--}}
{{--            <h3 class="h3-title text-black text-center">--}}
{{--                MegaCM is Available for--}}
{{--            </h3>--}}
{{--            <div class="__content">--}}
{{--                <ul class="x_blc_service flex-wrap">--}}
{{--                    <li>--}}
{{--                        <a href="https://megacm.com.au/services/">--}}
{{--                            <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="Houses" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="Houses"></noscript>--}}
{{--                            <p>Houses--}}
{{--                            </p></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="https://megacm.com.au/services/">--}}
{{--                            <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object28.png" alt="Apartments" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object28.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object28.png" alt="Apartments"></noscript>--}}
{{--                            <p>Apartments--}}
{{--                            </p></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="https://megacm.com.au/services/">--}}
{{--                            <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object29.png" alt="Townhouses" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object29.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object29.png" alt="Townhouses"></noscript>--}}
{{--                            <p>Townhouses--}}
{{--                            </p></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="https://megacm.com.au/services/">--}}
{{--                            <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object30.png" alt="Estates" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object30.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object30.png" alt="Estates"></noscript>--}}
{{--                            <p>Estates--}}
{{--                            </p></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="https://megacm.com.au/services/construction-cleaning/">--}}
{{--                            <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object31.png" alt="Recently renovated buildings" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object31.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object31.png" alt="Recently renovated buildings"></noscript>--}}
{{--                            <p>Recently renovated buildings--}}
{{--                            </p></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="https://megacm.com.au/services/office-cleaning">--}}
{{--                            <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object32.png" alt="Small offices" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object32.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object32.png" alt="Small offices"></noscript>--}}
{{--                            <p>Small offices--}}
{{--                            </p></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <p class="text-center mw-980">--}}
{{--                    With industry-leading quality controls, our customers rate their teams after having their home cleaned so you can be sure you're receiving a cutting-edge, superior service, every single time.--}}
{{--                </p>--}}
{{--                <div class="text-center my-3">--}}
{{--                    <a href="{{ route("home.order.book-now") }}" target="_self" class="btn btn-success btn-book-now">--}}
{{--                        <span class="fl-button-text">BOOK NOW</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--   </div>--}}
    <div class="block">
        <div class="intro  py-5">
            <div class="container z-3 position-relative text-white">
                <h3 class="h3-title text-center text-white">
                    <span>Take Time Off and Leave the Cleaning to Us</span>
                </h3>
                <div class="fl-rich-text text-white">
                    <p style="text-align: center;">There is a reason why Sydney is Australia’s most populous city – everyone wants to live here!</p>
                    <p style="text-align: center;">This world-famous metropolis boasts bucket list-worthy landmarks, reputable educational institutes like the University of Sydney and University of New South Wales, plenty of scope for career growth, gorgeous suburban neighborhoods away from the bustling Sydney Central Business District (CBD) area, public amenities galore, and that’s just the tip of the iceberg!</p>
                    <p style="text-align: center;">Yes, the state capital of New South Wales is everything you can dream of, and more.</p>
                    <p style="text-align: center;">Home to the iconic tourist attractions in Australia – Sydney Opera House and the Harbour Bridge – the city offers plenty of outdoor leisure activities for both visitors and residents, alike. Of course, for Sydneysiders who have busy work schedules and/or families to devote their time to, life can get pretty hectic here.</p>
                    <p style="text-align: center;">This couldn’t be more true for a typical Sydney household where a list of responsibilities keeps you from making home cleaning a priority.</p>
                    <p style="text-align: center;">Well, this is where MegaCM can serve you!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>Penrith’s Best Home Cleaning Service!</span>
            </h3>
            <div class="row">
                <div class="col-md-5 col-12 order-1">
                    <div class="__image d-lg-flex justify-content-end align-items-center">
                        <img src="{{ asset("images/8427.jpg") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>
                <div class="col-md-7 col-12 order-0">
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

{{--    @include("index.components.faqs")--}}

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