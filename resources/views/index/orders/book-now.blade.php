@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <div id="cart">
                <Cart action="{{route('home.order.services')}}"/>
            </div>
        </div>
    </div>
@endsection

@push("vue")
    <script type="module">
      window.app.mount('#cart')
    </script>
@endpush
