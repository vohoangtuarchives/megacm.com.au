<div>
    <div class="row my-3">
        <div class="col-md-4  mb-3">
            <label class="form-label">Tỉnh Thành</label>
            <select wire:model.live="city" name="city"  wire:click="changeCity($event.target.value)"
                    class="form-select">
                <option selected>Chọn Tỉnh Thành</option>
                @foreach($cities as $city)
                    <option value="{{$city->id}}"
                            @isset($customer->district)
                            @if((int)$customer->district == $district->id) selected @endif
                            @endisset
                    >{{$city->name_with_type}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4  mb-3">
            <label class="form-label">Quận Huyện</label>
            <select wire:model.live="district" name="district" wire:click="changeDistrict($event.target.value)"
                    class="form-select">
                <option selected>Chọn Quận Huyện</option>
                @isset($districts)
                    @foreach($districts as $district)
                        <option value="{{$district->id}}"
                                @isset($customer->district)
                                    @if((int) $customer->district == $district->id) selected @endif
                                @endisset
                        >{{$district->name_with_type}}</option>
                    @endforeach
                @endisset
            </select>
        </div>
        <div class="col-md-4  mb-3">
            <label class="form-label">Phường Xã</label>
            <select wire:model.live="ward" name="ward" class="form-select" wire:click="changeWard($event.target.value)">
                <option selected>Chọn Phường Xã</option>
                @isset($wards)
                @foreach($wards as $ward)
                    <option value="{{$ward->id}}"
                            @isset($customer->ward)
                                @if((int) $customer->ward == $ward->id) selected @endif
                            @endisset
                    >{{$ward->name_with_type}}</option>
                @endforeach
                @endisset
            </select>
        </div>
        <div class="col-md-12 mb-3">
            <label for="">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="{{ $address ?? '' }}">
        </div>
    </div>
</div>
