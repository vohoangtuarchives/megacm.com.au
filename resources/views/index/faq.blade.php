@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="faq-content __content bg-grey p-4">
                            <h3 class="h3-title text-center"><span>{{ $newsList->name }}</span></h3>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach($newsItems as $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="{{$faq->slug}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$faq->slug}}-id" aria-expanded="false" aria-controls="{{$faq->slug}}-id">
                                                {!!  $faq->name!!}
                                            </button>
                                        </h2>
                                        <div id="{{$faq->slug}}-id" class="accordion-collapse collapse" aria-labelledby="{{$faq->slug}}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                {!! html_entity_decode($faq->content) !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="faq-content-menu __content">
                        <ul class="list-group list-group-flush">
                            @foreach($faqLists as $stt => $item)
                                <li class="list-group-item @if($item->id == $newsList->id) active bg-green text-white @endif" >
                                    <a href="{{ route("home.faq.newslist", $item->slug) }}">{{ $item->name }}</a>
                                </li>
                            @endforeach
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