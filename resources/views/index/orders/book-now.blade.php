@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <div id="cart">
                <Cart resources="{{route('home.order.services')}}" action="{{csrf_token()}}"/>
            </div>
        </div>
    </div>
@endsection

@push("vue")
    <script type="module">
      window.app.mount('#cart')
    </script>
@endpush
