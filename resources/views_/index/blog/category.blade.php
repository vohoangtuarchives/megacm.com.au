@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <div class="row g-1">
                <div class="col-lg-8">
                    @section("blog-content")
                        @isset($newsLists)
                            <div class="blog-category-content __content p-3 d-flex flex-wrap justify-content-center">
                                @foreach($newsLists as $list)
                                    <a href="{{ route("home.blog.category", $list->slug) }}" class="link-blog-category mx-3">
                                        <span>{{ $list->name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endisset
                        @isset($blogs)
                            <div class="blog-newest-content __content p-3">
                                <div class="row">
                                    @foreach($blogs as $blog)
                                        <div class="col-md-6 col-12">
                                            <div class="blog-item mb-5">
                                                <div class="blog-image mb-3">
                                                    <a href="{{ route("home.blog.item", $blog->slug) }}">
                                                        <img src="{{ $blog->photo }}" alt="{{ $blog->name }}" class="w-100 img-fluid">
                                                    </a>
                                                </div>
                                                <h3 class="mb-3"><a href="{{ route("home.blog.item", $blog->slug) }}"><span>{{ $blog->name }}</span></a></h3>
                                                <div class="blog-desc text-split">
                                                    {{ $blog->desc }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="my-4">
                                {{ $blogs->links() }}
                            </div>
                        @endisset
                    @show
                </div>
                <div class="col-lg-4">
                    <div class="blog-content-menu bg-grey __content p-5">
                        <h4>About MegaCM</h4>
                        <div>
                            <p><a href="https://www.maidforyou.com.au/">Maidforyou.com.au</a> is NOT your typical Sydney metropolitan home cleaning company. <a href="https://www.maidforyou.com.au/"><strong>MaidForYou</strong></a> is bringing <a href="/services/">maid services</a> into the 21st century by building a company we would want to do business with ourselves.</p>
                        </div>
                        <p>Click below to explore our services:</p>

                        <ul class="blog-services list-unstyled p-0">
                            <li>
                                <a href="https://www.maidforyou.com.au/services/">
                                    <div class="side-img">
                                        <img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object27.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">House Cleaning</div>
                                </a>
                            </li>
                            <li><a href="https://www.maidforyou.com.au/services/office-cleaning-sydney/">
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object17.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object17.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">Office Cleaning</div>
                                </a>
                            </li>
                            <li><a href="https://www.maidforyou.com.au/services/regular-cleaning-sydney/">
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object18.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object18.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">Regular Cleaning</div>
                                </a>
                            </li>
                            <li><a href="https://www.maidforyou.com.au/services/end-of-lease-cleaning-sydney/">
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object19.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object19.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">End of Lease Cleaning</div>
                                </a>
                            </li>
                            <li><a href="https://www.maidforyou.com.au/services/deep-cleaning-services-sydney/">
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object20.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object20.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">Deep Cleaning</div>
                                </a>
                            </li>
                            <li><a href="https://www.maidforyou.com.au/services/construction-cleaning/">
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object24.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object24.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">Construction Cleaning</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.maidforyou.com.au/services/ndis-cleaning/"><p></p>
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object25.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object25.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">NDIS Cleaning</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.maidforyou.com.au/services/oven-cleaning/"><p></p>
                                    <div class="side-img"><img decoding="async" src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object26.png" alt="house" data-lazy-src="https://www.maidforyou.com.au/wp-content/uploads/2022/12/vector_smart_object26.png" data-ll-status="loaded" class="entered lazyloaded"></div>
                                    <div class="sid_content">Oven Cleaning</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-content-menu bg-grey __content p-5 my-5">
                        <h4 class="mb-5">FOLLOW US:</h4>

                        <ul class="blog-services list-unstyled p-0">
                            <li>
                                <a href="https://www.maidforyou.com.au/services/">
                                    <div class="side-img">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="sid_content">FACEBOOK</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.maidforyou.com.au/services/">
                                    <div class="side-img">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="sid_content">TWITTER</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.maidforyou.com.au/services/">
                                    <div class="side-img">
                                        <i class="fab fa-google"></i>
                                    </div>
                                    <div class="sid_content">GOOGLE</div>
                                </a>
                            </li>
                        </ul>
                    </div>
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