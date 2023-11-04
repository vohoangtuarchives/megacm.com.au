@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container mw-1200">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <p><strong>MegaCM</strong><br>
                        <strong>Phone:</strong> <a href="tel:481686339">481686339</a><br>
                        <strong>Email:</strong> <a href="mailto:sales@megacm.com.au">sales@megacm.com.au</a><br>
                        <strong>ACN:</strong> 668 754 363<br>
                        <strong>Address: </strong>Unit 9/41-43 Jamison RdKingswood NSW 2747</p>
                </div>
                <div class="col-lg-6 col-12">
                    <form class="contact-form validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control text-sm" id="fullname-contact" name="dataContact[fullname]" placeholder="{{ __('Name') }}" value="{{ old("fullname") }}" required />
                                <div class="invalid-feedback">{{ __('Please provide your name') }}</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="number" class="form-control text-sm" id="phone-contact" name="dataContact[phone]" placeholder="{{ __('Phone Number') }}" value="{{ old("phone") }}" required />
                                <div class="invalid-feedback">{{ __('Please provide your phone number') }}</div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control text-sm" id="address-contact" name="dataContact[address]" placeholder="{{ __('Adress') }}" value="{{ old("address") }}" required />
                                <div class="invalid-feedback">{{ __('Please provide your living address') }}</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" class="form-control text-sm" id="email-contact" name="dataContact[email]" placeholder="Email" value="{{ old("email") }}" required />
                                <div class="invalid-feedback">{{ __('Please provide your email') }}</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control text-sm" id="subject-contact" name="dataContact[subject]" placeholder="{{ __('Title') }}" value="{{ old("subject") }}" required />
                            <div class="invalid-feedback">{{ __('Please provide title') }}</div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control text-sm" id="content-contact" name="dataContact[content]" placeholder="{{ __('Content') }}" required />{{ old("content") }}</textarea>
                            <div class="invalid-feedback">{{ __('Please provide content') }}</div>
                        </div>
                        <div class="mb-3 d-none">
                            <input type="file" class="custom-file-input" name="file_attach">
                            <label class="custom-file-label" for="file_attach" title="{{ __('Chọn') }}">{{ __('Đính kèm tập tin') }}</label>
                        </div>
                        <input type="submit" class="w-100 btn btn-success " value="{{ __('CONTACT US TODAY') }}"/>
                        <input type="hidden" name="submit-contact" value="1">
                        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    </form>
                </div>
                <div class="col-12 my-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4481760094527!2d106.68480041483649!3d10.776945462130913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3b27d8a7fd%3A0xdb0d92470911a699!2sThe%20Box%20Market!5e0!3m2!1svi!2s!4v1589339784678!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection