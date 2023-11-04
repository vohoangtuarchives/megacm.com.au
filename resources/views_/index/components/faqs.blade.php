<div class="block my-5 mw-980" id="home-faq">
    <div class="container">
        <h3 class="h3-title text-center"><span>Frequently Asked Questions</span></h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach(\App\Facades\MegaCM::lastestFAQs() as $stt => $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="{{$faq->slug}}">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#{{$faq->slug}}-id" aria-expanded="false" aria-controls="{{$faq->slug}}-id">
                            {{$faq->name}}
                        </button>
                    </h2>
                    <div id="{{$faq->slug}}-id" class="accordion-collapse collapse @if($stt == 0) show @endif" aria-labelledby="{{$faq->slug}}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{$faq->content}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>