<div id="price-table">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                Standard
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                Deep
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                Move In/Out
            </button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="column-services">
                @foreach(\App\Facades\MegaCM::checkList() as $list)
                    <div class="service-column-item">
                        <div class="__image">
                            <img src="{{ $list['image'] }}" alt="" class="img-fluid">
                        </div>
                        <div class="__content px-3 py-4">
                            <h4 class="__title">{{ $list['title'] }}</h4>
                            <ul class="__list list-unstyled">
                                @foreach($list['childrens'] as $item)
                                    <li class="__sub_item d-flex align-items-center flex-wrap">
                                         <span class="__icon me-2">
                                             <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                         </span>
                                        <span class="__title">
                                             {{ $item }}
                                         </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="column-services">
                @foreach(\App\Facades\MegaCM::checkList() as $list)
                    <div class="service-column-item">
                        <div class="__image">
                            <img src="{{ $list['image'] }}" alt="" class="img-fluid">
                        </div>
                        <div class="__content px-3 py-4">
                            <h4 class="__title">{{ $list['title'] }}</h4>
                            <ul class="__list list-unstyled">
                                @foreach($list['childrens'] as $item)
                                    <li class="__sub_item d-flex align-items-center flex-wrap">
                                         <span class="__icon me-2">
                                             <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                         </span>
                                        <span class="__title">
                                             {{ $item }}
                                         </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="column-services">
                @foreach(\App\Facades\MegaCM::checkList() as $list)
                    <div class="service-column-item">
                        <div class="__image">
                            <img src="{{ $list['image'] }}" alt="" class="img-fluid">
                        </div>
                        <div class="__content px-3 py-4">
                            <h4 class="__title">{{ $list['title'] }}</h4>
                            <ul class="__list list-unstyled">
                                @foreach($list['childrens'] as $item)
                                    <li class="__sub_item d-flex align-items-center flex-wrap">
                                         <span class="__icon me-2">
                                             <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                         </span>
                                        <span class="__title">
                                             {{ $item }}
                                         </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
