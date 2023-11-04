@extends("layouts.master")
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center g-3">
                        <div class="col-md-3">
                            <h5 class="card-title mb-0">@lang('admin.menu.'.$entity.'.title')</h5>
                        </div>
                        <div class="col-sm-auto ms-auto">
                            <div class="d-flex flex-wrap align-items-start justify-content-end gap-2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            {{ $datatables->html() }}
        </div>
    </div>
    <div id="updateContentEdit"></div>
@endsection
@section("script")
    {{ $datatables->includeScript() }}
    @include("dashboard.layouts.script")

@endsection
@push("styles")
    {{ $datatables->includeStyles() }}
@endpush
@push("scripts")
    {{ $datatables->script() }}
@endpush

