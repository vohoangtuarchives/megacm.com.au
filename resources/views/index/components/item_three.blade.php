<div class="carpet_item">
    <div class="image">
        <img src="{{ $image }}" alt="{{ $image }}" class="filter-green">
    </div>
    <div class="title fs-20 fw-bold my-3">
        {{ $title }}
    </div>
    @isset($content)
    <div class="content fs-15">
        {{ $content }}
    </div>
    @endisset
</div>