@extends("index.blog")
@section("blog-content")

    <div class="blog-large-item">
        <h3><a href="{{ route("home.blog.item", $blog->slug) }}"><span class="h3-title">{{ $blog->name }}</span></a></h3>
        <div class="mb-4">
            <div class="fl-list-item-heading">
                <span class="fl-list-item-heading-icon fl-list-item-heading-left">
                    <i class="fl-list-item-icon fas fa-calendar-alt" aria-hidden="true"></i></span>
                    <span class="fl-list-item-heading-text">
                    {{ date("M d,Y", $blog->date_created) }}
                    </span>
            </div>
        </div>
<div class="blog-image mb-3">
<img src="{{ $blog->photo }}" alt="{{ $blog->name }}" class="w-100 img-fluid">
</div>
<div class="blog-desc">
{{ $blog->desc }}
</div>

<div class="blog-content">
{!! html_entity_decode($blog->content) !!}
</div>
</div>
@endsection