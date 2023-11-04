@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Deep Cleaning Services in Sydney
                    </span>
            </h3>
            <div class="content">
                <p>
                    What better way to get your house looking its absolute best than with a thorough, professional
                    deep clean? Imagine a house that is spotless from top to bottom, every room neat and tidy with
                    nothing left out of place; if it sounds a dream, <strong>MegaCM</strong> is here to make that dream
                    come true! Our deep cleaning services are guaranteed to leave you thoroughly satisfied with A++ cleaning results that leave no ‘missed spots’ in your home. Thanks to a team of trusted and dedicated cleaners, customers can expect nothing short of top quality service from beginning to end.
                </p>
                <p>
                    Deep cleaning of your home is one of the most important things you can do to maintain its
                    condition and, in turn, increase the resale value of your property. Of course, for anyone who is
                    simply concerned with keeping a neat and sanitary home, MegaCM’s deep cleaning services are the way
                    to go!
                </p>
            </div>
        </div>
    </div>

    <div class="block py-5 bg-grey">
        <div class="container">
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid"
                         src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png"
                         alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png"
                    >
                </div>
                <div class="__image">
                    <img class="img-fluid"
                         src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png"
                         alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png"
                    >
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-us1.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png">
                </div>
            </div>
            <h3 class="h3-title text-center my-4"><span>What is a Deep Cleaning Service?</span></h3>
            <div class="content">
                A deep cleaning service is like a super-duper cleaning for your home. It's not the kind of cleaning
                you do every day but something you do every once in a while to make everything extra clean.<br />

                During a deep cleaning, cleaning experts pay extra attention to places that often get missed during regular cleaning. They clean things like baseboards (the bottom edges of walls), light fixtures, fans, and vents. In the kitchen, they clean inside the oven, fridge, and microwave, making them sparkle. They also make sure the sink and cabinets are super clean.<br />

                In the bathroom, deep cleaning means getting rid of things like soap scum, mold, and mildew. They clean tiles, faucets, and mirrors until they shine. All the surfaces, from furniture to shelves, get a good dusting.<br />

                Sometimes, deep cleaning includes special things like cleaning carpets or washing windows inside and out. It's a bit like giving your home a spa day—everything feels fresh and new when it's done. People often get a deep cleaning service when they want to make sure their home is in tip-top shape or when they're moving in or out of a place to leave it extra clean for the next person.<br />
            </div>
        </div>
    </div>

    <div class="block py-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="h3-title">
                        <span>Why Choose MegaCM</span>
                    </h3>
                    <p>
                        Deep cleaning of one’s home is something that should be undertaken by professional,
                        experienced and trustworthy individuals. After all, this is a process that involves a team of
                        cleaners coming into your home with various types of equipment and products that all may be
                        new to you. It’s important that you trust the cleaning team your hire and have faith in their
                        ability to deep clean your home in the safest and most effective manner. Well, for these
                        reasons, and several more, homeowners turn to MegaCM’s reliable and reputable deep cleaning
                        services.
                    </p>

                    <p>
                        To separate ourselves from fellow cleaning companies in Sydney, we offer all-round,
                        customized deep cleaning services which ensure that all your cleaning needs are met under one
                        roof. We are also flexible with timings so that you are not inconvenienced by a deep cleaning
                        session that clashes with your personal schedule. Above this, MegaCM provides superior cleaning
                        results on every occasion that is backed by a 200% guarantee.
                    </p>

                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="__image d-lg-flex justify-content-end align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="block bg-grey py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Deep Cleaning Services by Vetted Professionals
                    </span>
            </h3>
            <div class="content">
                In order to put together a team of cleaners that are not only highly trained and skilled in the
                cleaning field, but also trustworthy and honest individuals, MegaCM runs a thorough background check on
                each potential cleaner, while also conducting many skill and ability tests before hiring them. With cleaning professionals that have been rigorously vetted, you can rest assured that your home, belongings, and family are completely safe in our presence.

                What’s more, the experience possessed by MegaCM’s cleaning staff ensures that all deep cleaning
                sessions
                are handled in the most professional and respectful manner. When you hire our deep cleaning services, you can expect a comprehensive clean of your entire house to reveal spotless floors, gleaming surfaces, and thoroughly sanitized spaces throughout your home.
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