<div class="fl-row fl-row-full-width fl-row-bg-none fl-node-neu6ykdpcgor fl-row-default-height fl-row-align-center" data-node="neu6ykdpcgor">
    <div class="fl-row-content-wrap">
        <div class="fl-row-content fl-row-fixed-width fl-node-content">

            <div class="fl-col-group fl-node-jdq0fbw32yxn" data-node="jdq0fbw32yxn">
                <div class="fl-col fl-node-10ugpjn7ztxe" data-node="10ugpjn7ztxe">
                    <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-heading fl-node-dzoumxr7wbh9 inner-we-serve" data-node="dzoumxr7wbh9">
                            <div class="fl-module-content fl-node-content">
                                <h3 class="h3-title text-center">
                                    {{ $title ?? 'Your House Cleaning Checklist' }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
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
</div>