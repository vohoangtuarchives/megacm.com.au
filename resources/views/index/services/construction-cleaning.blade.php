@extends("index.layouts.app")
@section("content")
    <div class="block bg-grey py-8">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Get Rid of the Mess With Our Construction Cleaning Services
                    </span>
            </h3>
            <div class="content-text">
                <div class="fl-rich-text">
                    <p>Post-construction properties are unlivable due to the mess that are left behind. You may be standing in a beautiful, newly constructed home, but there is still one thing left to do before you can move in – construction cleaning.<br>
                        <span class="text-style">&nbsp;</span><br>
                        If you are not aware, the specific requirements for an after builders clean are best taken cared of by a team of fully capable, fully insured and experienced cleaning professionals. It is no walk in the park and involves the use of industrial equipment and special products to assist with the removing of fine debris that typically finds its way to every inch of a newly built house. With years of experience within the post-renovation cleaning space, the professional cleaners at <strong>MEGACM</strong>, go beyond mere surface cleaning to ensure that you are moving into a truly clean and livable home with top to bottom construction cleaning services in Sydney.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>
                    Construction Cleaning Pricing
                </span>
            </h3>
            <div id="price-table">
                <div class="tab-content">
                    <table class="w-75 mx-auto">
                        <tbody>
                        <tr>
                            <th>Service</th>
                            <th>Pricing</th>
                        </tr>
                        <tr>
                            <td>End Of Lease Cleaning</td>
                            <td>Included</td>
                        </tr>
                        <tr>
                            <td>Deep Clean</td>
                            <td>$49</td>
                        </tr>
                        <tr>
                            <td>General Clean</td>
                            <td>$49</td>
                        </tr>
                        <tr>
                            <td>Weekly Clean</td>
                            <td>$39.2</td>
                        </tr>
                        <tr>
                            <td>Fortnightly Clean</td>
                            <td>$41.65</td>
                        </tr>
                        <tr>
                            <td>Monthly Clean</td>
                            <td>$44.1</td>
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
    </div>

    <div class="block py-5">
        @include("index.partials.services", ['title' => 'Your Post Construction Cleaning Checklist'])
    </div>
    <div class="block bg-grey py-8">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Get Rid of the Mess With Our Construction Cleaning Services
                    </span>
            </h3>
            <div class="content-text">
                <div class="fl-rich-text">
                    <p>Post-construction properties are unlivable due to the mess that are left behind. You may be standing in a beautiful, newly constructed home, but there is still one thing left to do before you can move in – construction cleaning.<br>
                        <span class="text-style">&nbsp;</span><br>
                        If you are not aware, the specific requirements for an after builders clean are best taken cared of by a team of fully capable, fully insured and experienced cleaning professionals. It is no walk in the park and involves the use of industrial equipment and special products to assist with the removing of fine debris that typically finds its way to every inch of a newly built house. With years of experience within the post-renovation cleaning space, the professional cleaners at <strong>MEGACM</strong>, go beyond mere surface cleaning to ensure that you are moving into a truly clean and livable home with top to bottom construction cleaning services in Sydney.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>Take Time Off and Leave the Cleaning to Us 1</span>
            </h3>
            <div class="row">
                <div class="col-lg-5 order-1">
                    <div class="__image d-lg-flex justify-content-end align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>
                <div class="col-lg-5 order-0">
                    {{ fake()->realText(1200) }}
                </div>

            </div>
            <div class="text-center my-3">
                <a href="book-now" target="_self" class="btn btn-success btn-book-now">
                    <span class="fl-button-text">BOOK NOW</span>
                </a>
            </div>
        </div>
    </div>

    <div class="block bg-grey py-8">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Get Rid of the Mess With Our Construction Cleaning Services
                    </span>
            </h3>

            <div class="content-text">
                <div class="fl-rich-text">
                    <p>Post-construction properties are unlivable due to the mess that are left behind. You may be standing in a beautiful, newly constructed home, but there is still one thing left to do before you can move in – construction cleaning.<br>
                        <span class="text-style">&nbsp;</span><br>
                        If you are not aware, the specific requirements for an after builders clean are best taken cared of by a team of fully capable, fully insured and experienced cleaning professionals. It is no walk in the park and involves the use of industrial equipment and special products to assist with the removing of fine debris that typically finds its way to every inch of a newly built house. With years of experience within the post-renovation cleaning space, the professional cleaners at <strong>MEGACM</strong>, go beyond mere surface cleaning to ensure that you are moving into a truly clean and livable home with top to bottom construction cleaning services in Sydney.</p>
                </div>
            </div>
        </div>
    </div>
    @include("index.components.faqs")
@endsection