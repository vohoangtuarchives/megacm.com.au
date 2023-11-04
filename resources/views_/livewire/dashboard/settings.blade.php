<div>
    <div class="row">
        <div class="col-lg-9">
            <form action="" method="POST">
                @csrf
                @method("PUT")
            <div class="card">
                <div class="card-body" id="settingsContent">
                        @if($setting == 'general')
                            @includeIf("dashboard.pages.settings.partials.general")
                        @endif
                        @if($setting == 'email')
                            @includeIf("dashboard.pages.settings.partials.email")
                        @endif

                        @if($setting == 'services')
                            @includeIf("dashboard.pages.settings.partials.services")
                        @endif

                        @if($setting == 'prices')
                            @includeIf("dashboard.pages.settings.partials.prices")
                        @endif
                </div>
                <div class="card-footer" style="text-align: right">
                    <button type="submit" class="btn btn-primary">Thay Đổi</button>
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <x-btn.outline-primary class="w-100 mb-3 {{ $active['general'] ?? '' }}" wire:click="select('general')">
                        {{ __("admin.settings.general") }}
                    </x-btn.outline-primary>
                    <x-btn.outline-primary class="w-100 mb-3  {{ $active['email'] ?? '' }}" wire:click="select('email')">
                        Email
                    </x-btn.outline-primary>
                    <x-btn.outline-primary class="w-100 mb-3  {{ $active['services'] ?? '' }}" wire:click="select
                    ('services')">
                        Services
                    </x-btn.outline-primary>

                    <x-btn.outline-primary class="w-100 mb-3  {{ $active['prices'] ?? '' }}" wire:click="select
                    ('prices')">
                        Prices
                    </x-btn.outline-primary>
                </div>
            </div>
        </div>
    </div>
</div>