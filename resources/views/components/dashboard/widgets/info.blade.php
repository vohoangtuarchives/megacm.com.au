@props([
    'title',
    'counter'
])
<div class="card card-animate">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 overflow-hidden">
                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">{{ $title }}</p>
            </div>
        </div>
        <div class="d-flex align-items-end justify-content-between mt-4">
            <div>
                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{
                $counter }}">{{ $counter }}</span> </h4>
            </div>
        </div>
    </div><!-- end card body -->
</div>