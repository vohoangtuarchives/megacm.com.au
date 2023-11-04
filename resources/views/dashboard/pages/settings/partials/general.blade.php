<div x-transition>
    <div class="row align-items-center mb-3">
        <div class="col-lg-2">
            <label for="site_title" class="form-label">{{ __("admin.settings.site_title") }}</label>
        </div>
        <div class="col-lg-10">
            <div class="input-group">
                <x-form.input placeholder="Tên trang web" name="site_title">
                    {{ core()->getSetting("site_title") }}
                </x-form.input>
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-3">
        <div class="col-lg-2">
            <label for="phone" class="form-label">{{ __("admin.settings.phone") }}</label>
        </div>
        <div class="col-lg-10">
            <div class="input-group">
                <x-form.input placeholder="Phone" name="phone">
                    {{ core()->getSetting("phone") }}
                </x-form.input>
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-3">
        <div class="col-lg-2">
            <label for="acn" class="form-label">{{ __("admin.settings.acn") }}</label>
        </div>
        <div class="col-lg-10">
            <div class="input-group">
                <x-form.input placeholder="ACN" name="acn">
                    {{ core()->getSetting("acn") }}
                </x-form.input>
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-3">
        <div class="col-lg-2">
            <label for="address" class="form-label">{{ __("admin.settings.address") }}</label>
        </div>
        <div class="col-lg-10">
            <div class="input-group">
                <x-form.input placeholder="Address" name="address">
                    {{ core()->getSetting("address") }}
                </x-form.input>

            </div>
        </div>

    </div>

</div>

